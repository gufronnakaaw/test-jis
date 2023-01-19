<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function check(Request $request){
        $credentials = [
            'name' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if(Auth::attempt($credentials)){
            return redirect('/');
        }

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
