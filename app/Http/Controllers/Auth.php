<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class Auth extends Controller
{
    public function index()
    {
        return view('login');
    }
 
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:user,username',
            'password' => 'required'
        ]);

        $user = User::where('username','=',$request->username)->first();
        

        if($user->password != $request->password)
        {
            return redirect('/login')->with('status','incorrect password');
        } else {
            Session::put('Username',$user->username);
            return redirect('/');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
