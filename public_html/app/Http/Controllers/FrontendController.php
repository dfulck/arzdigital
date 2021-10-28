<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{

   function faq(){
       return view("frontend.faq");
   }
    function contact(){
        return view("frontend.contact");
    }
    function home(){
        return view("frontend.home");
    }
    function rules(){
       $this->data->rules=Setting::where("field_name","rules")->first()->value;
        return view("frontend.rules")->withData($this->data);
    }
    function admins(){
        return view("frontend.admins");
    }
    function comments(){
       $this->data->comments=Comment::where("status",1)->orderBy("created_time","desc")->get();
        return view("frontend.comments")->withData($this->data);
    }
    function comment(Request $request){

       $old=Comment::where("sess",session()->getId())->orderBy("created_time","desc")->first();
       if ($old){
           if (time()-$old->created_time<3600){
               return redirect()->route("comments");
           }
       }

        $comment=new Comment();
        $comment->body=$request->body;
        $comment->email=$request->email;
        $comment->username=$request->username;
        $comment->created_time=time();
        $comment->status=0;
        $comment->sess=session()->getId();
        $comment->save();
        Session::flash('message', 'نظر شما ثبت شد منتظر تایید کارشناسان باشید');
        return redirect()->route("comments");
    }
    function contactSave(Request $request){

        $old=Contact::where("sess",session()->getId())->orderBy("created_time","desc")->first();
        if ($old){
            if (time()-$old->created_time<3600){
                return redirect()->route("contact");
            }
        }

        $contact=new Contact();
        $contact->body=$request->body;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->subject=$request->subject;
        $contact->created_time=time();
        $contact->status=0;
        $contact->sess=session()->getId();
        $contact->save();
        Session::flash('message', 'متن شما ثبت شد منتظر تماس کارشناسان باشید');
        return redirect()->route("contact");
    }
}
