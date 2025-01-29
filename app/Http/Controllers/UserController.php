<?php

namespace App\Http\Controllers;

use App\Http\Requests\users\UpdateUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        return view('users.edit');
    }

    public function update(UpdateUserRequest $request)
    {
        $status = UserRepository::update($request->validated());

        return to_route('user.edit')->with('status', $status);
    }
}
