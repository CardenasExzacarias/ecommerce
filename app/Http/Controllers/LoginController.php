<?php

namespace App\Http\Controllers;

use App\Http\Requests\login\AttemptLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function attempt(AttemptLoginRequest $request){
        $credentials = $request->validated();

        if (Auth::attempt($credentials)){
            return 'Youre logged in';
        }
        
        return 'Login failed';
    }

    public function identify(){
        return 'Identifying you...';
    }
}
