<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
       //validate the request
       $this->validate($request, [
           'name' => 'required|max:255',
           'username' => 'required|max:255',
           'email' => 'required|email|max:255',
           'password' => 'required|confirmed',
       ]);


       //store the user

       User::create([
           'name' => $request->name,
           'username' => $request->username,
           'email' => $request->email,
           'password' => Hash::make($request->password),
       ]);
       //sign the user in

       //auth()->user(); //null if no current user or returns user model

       auth()->attempt([
           'email' => $request->email,
           'password' => $request->password,
       ]);
       //redirect

       

       return redirect()->route('dashboard');
    }
}
