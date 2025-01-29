<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        return view('configuration.edit');
    }

    public function update(Request $request)
    {
        // Lógica de actualización
        return redirect()->route('configuration.index');
    }
}
