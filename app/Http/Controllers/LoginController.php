<?php

namespace App\Http\Controllers;

use App\Http\Requests\login\AttemptLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function attempt(AttemptLoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            return redirect('ticket');
        }

        return redirect('login');
    }

    public function identify()
    {
        return 'Identifying you...';
    }
}
