<?php

namespace App\Http\Controllers;

use App\Mail\MassageEmail;
use App\Models\Category;
use App\Models\Email;
use App\Models\Massage;
use App\Models\Newsemail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Massage.index',[
            'massages'=>Massage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Massage.create',[
            'roles'=>Role::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collect=collect($request->get('role'))->filter(function ($item){
            return $item;
        });
        Email::query()->delete();
        $massage=$request->get('title');
        $massages= Massage::query()->create([
            'title'=>$massage
        ]);

        $newsEmail=Newsemail::all();
        if ($request->get('WebUser')){
           foreach ($newsEmail as $newEmail){
               Email::query()->create([
                   'email'=>$newEmail->email
               ]);
           }
        }
        if ($request->get('role')){
            foreach ($collect as $role){
               $roleEmail= User::query()->where('Role_id',$role)->get();
               foreach ($roleEmail as $UserEmail){
                   $massages->users()->attach($UserEmail->id);
                   Email::query()->create([
                       'email'=>$UserEmail->email
                   ]);
               }
            }
        }
        $emails=Email::all();
        foreach ($emails as $email){
            Mail::to($email->email)->send(new MassageEmail($massage));
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function show(Massage $massage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function edit(Massage $massage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Massage $massage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Massage $massage)
    {
        //
    }
}
