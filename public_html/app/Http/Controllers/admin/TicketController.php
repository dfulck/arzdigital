<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Yajra\DataTables\DataTables;

class TicketController extends AdminController
{
    function index(){
        return view("admin.tickets")->withData($this->data);
    }
    function data(Request $request){
        $tickets=Ticket::select("u_id","subject","updated_time","status","id")->where("parent_id",0)->orderBy("status","desc")->orderBy("updated_time","desc");

        $data=DataTables::of($tickets)->make(false)->original;
        for ($i=0;$i<count($data["data"]);$i++){
            $user=User::where("id",$data["data"][$i][0])->first();
            if ($user){
                $data["data"][$i][0]=$user->name;
            }
            else{
                $data["data"][$i][0]="حذف شده";
            }
            $data["data"][$i][2]=Jalalian::forge($data["data"][$i][2])->format("Y-m-d H:i");
        }
        return json_encode($data);
    }
    function single(Request $request){
        $ticket=Ticket::where("id",$request->id)->first();

        if ($ticket){
            $this->data->ticket=$ticket;
            $this->data->tickets=Ticket::where("parent_id",$ticket->id)->orderBy("updated_time","asc")->get();
            $this->data->user=User::where("id",$ticket->u_id)->first();
            return view("admin.ticket")->withData($this->data);
        }
        return redirect()->route("admin.tickets");
    }
    function save(Request $request){
        $ticket=Ticket::where("id",$request->id)->first();
        if ($ticket){
            $ticket->updated_time=time();
            $ticket->is_new=0;
            $ticket->status=1;
            $ticket->save();

            $newTicket=new Ticket();
            $newTicket->body=$request->body;
            $newTicket->parent_id=$request->id;
            $newTicket->owner=1;

            $newTicket->registered_time=time();
            $newTicket->updated_time=time();
            $newTicket->subject="";
            $newTicket->u_id=$ticket->u_id;
            $newTicket->save();

            return redirect()->route("admin.ticket",["id"=>$ticket->id]);
        }
        return redirect()->route("admin.tickets");
    }
    function status(Request $request){
        $ticket=Ticket::where("id",$request->id)->first();
        if ($ticket){
            $ticket->status=$request->status;
            $ticket->save();
        }
        return redirect()->route("admin.ticket",["id"=>$ticket->id]);
    }
}
