<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Yajra\DataTables\DataTables;

class TicketController extends UserController
{
    function index()
    {
        return view("user.tickets")->withData($this->data);
    }
    function data(Request $request)
    {
        $tickets = Ticket::select("subject", "updated_time", "status", "id")->where("u_id", $this->data->user->id)->where("parent_id", 0)->where("type",0)->orderBy("status", "desc")->orderBy("updated_time", "desc");

        $data = DataTables::of($tickets)->make(false)->original;
        for ($i = 0; $i < count($data["data"]); $i++) {
            $data["data"][$i][1] = Jalalian::forge($data["data"][$i][1])->format("Y-m-d H:i");
        }
        return json_encode($data);
    }
    function single(Request $request)
    {
        $this->data->u_id=$request->u_id;
        $this->data->type=$request->type;
        $ticket = Ticket::where("id", $request->id)->first();

        if (!$ticket) {
            $ticket = new Ticket();
        }
        $this->data->ticket = $ticket;
        $this->data->tickets = Ticket::where("parent_id", $ticket->id)->where("type",0)->orderBy("updated_time", "asc")->get();

        return view("user.ticket")->withData($this->data);
    }
    function save(Request $request)
    {

        $ticket = Ticket::where("id", $request->id)->first();
        if ($ticket) {
            $ticket->updated_time = time();
            $ticket->is_new = 1;
            $ticket->status = 1;
            $ticket->save();

            $newTicket = new Ticket();
            $newTicket->body = $request->body;
            $newTicket->parent_id = $request->id;
            $newTicket->owner = 0;
            $newTicket->subject = "";
            $newTicket->registered_time = time();
            $newTicket->updated_time = time();

            $newTicket->u_id = $ticket->u_id;
            $newTicket->save();
        } else {
            $ticket = new Ticket();
            $ticket->body = $request->body;
            $ticket->parent_id =($request->type==1)?$this->data->user->id:0;
            $ticket->owner = 0;
            $ticket->type=$request->type==1?1:0;
            $ticket->subject = $request->subject;
            $ticket->registered_time = time();
            $ticket->updated_time = time();
            $ticket->u_id =($request->type==1)?$request->u_id:$this->data->user->id;
            $ticket->save();
        }
        if ($request->type==1){
            return redirect()->route("user.subset.message");
        }

        return redirect()->route("user.ticket", ["id" => $ticket->id]);
    }
    function status(Request $request)
    {
        $ticket = Ticket::where("id", $request->id)->first();
        if ($ticket) {
            $ticket->status = $request->status;
            $ticket->save();
        }
        return redirect()->route("user.ticket", ["id" => $ticket->id]);
    }
    function messages(Request $request){
        $this->data->messages=Ticket::where("type","1")->where("parent_id",$this->data->user->id)->get();
        $this->data->id=$this->data->user->id;
        return view("user.messages_subsets")->withData($this->data);
    }
}
