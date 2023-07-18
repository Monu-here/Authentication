<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{

    public function login(Request $request)
    {

        if ($request->getMethod() == 'POST') {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid Credentials');
            }
        } else {
            return view('login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
