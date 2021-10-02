<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.User.index');
    }

    /**
     * @param Request $request
     */

    public function login(Request $request)
    {
        $user = User::query()->whereEmail($request->get('email'))->firstOrFail();
        if (!Hash::check($request->get('password'), $user->password)) {
            return back()->withErrors(['password' => 'this password in incorect']);
        }
        auth()->login($user);
        session()->flash('success', "Login {$user->username} Successfully");
        return redirect(route('users.dashboard', $user));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function logout()
    {
        $user = auth()->user();
        auth()->logout($user);
        session()->flash('error', "Logout successfully");
        return redirect(route('users.index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $GETEMAIL = $_GET['id'];
        return view('client.User.create', [
            'collection' => $GETEMAIL
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email']
        ]);
        User::RegisterUser($request);
        session()->flash('success', 'sucessfull Registred');

        $user = auth()->user();
        return redirect(route('users.show', $user));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('Panel.Dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Panel.Profile.edit', [
            'users' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $image = $user->image;
        if ($request->hasFile('image')) {
            Storage::delete($user->image);
            $image = $request->file('image')->storeAs('public/UserImage', $request->file('image')->getClientOriginalName());
        }

        $user->update([
            'email' => $request->get('email', $user->email),
            'number' => $request->get('number', $user->number),
            'name' => $request->get('name', $user->name),
            'lastname' => $request->get('lastname', $user->lastname),
            'username' => $request->get('username', $user->username),
            'address' => $request->get('address', $user->address),
            'age' => $request->get('age', $user->age),
            'job' => $request->get('job', $user->job),
            'city' => $request->get('city', $user->city),
            'image' => $image,
        ]);
        if ($request->get('password')) {
            $user->update([
                'password' => bcrypt($request->get('password')),
            ]);
        }

        session()->flash('info', 'update successfully');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

    }


    public function CollectionLink()
    {

    }


    public function Collection(Request $request)
    {

    }
}
