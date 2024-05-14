<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function loginPage(){
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = User::where('email', $request->email)->first();

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/gallery')->with('logsuccess', 'Login Successful, Welcome Back!');
        }else {
            return back()->with('logerror', 'Login Failed, Incorrect email or password!');
        }

        return redirect('/login');
    }
}
