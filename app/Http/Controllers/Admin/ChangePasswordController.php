<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\RegisterUserRequest;

  

class ChangePasswordController extends Controller

{
    public function changeInfoUser()
    {
        $user = Auth::user();
        return view('back-end.admin.change-info', ['user' => $user]);
    } 


    public function changeInfoUserStore(Request $request)

    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'name' => ['required'],
            'email' => ['required'],
            'new_email' => ['same:new_email'],

        ]);

        User::find(auth()->user()->id)->update([
            'name' => $request->input('name'),
            'email'=> $request->input('email')
            ]);

        return redirect()->route('admin.dashboard')->with('success', 'informaions changed successfully.');
    }

  
    /**
     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {
        return view('back-end.admin.changePassword');
    } 
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function store(Request $request)

    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],

        ]);

        User::find(auth()->user()->id)->update([
            'password'=> Hash::make($request->new_password)
            ]);

        return redirect()->route('admin.dashboard')->with('success', 'Password change successfully.');
    }

    public function register()
    {
        return view('back-end.admin.register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(RegisterUserRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'user '.$user->name.' added successfully.');
    }

}