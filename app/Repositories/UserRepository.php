<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public static function update($fields)
    {
        $user = UserRepository::find('email', $fields['email']);

        if (static::verifyPassword($user, $fields['password'])) {
            $user->update([
                'name' => $fields['name'],
                'email' => $fields['new-email'],
            ]);

            return true;
        }

        return false;
    }

    public static function updatePassword()
    {
        // 'password' => Hash::make($fields['password'])
    }

    public static function verifyPassword($user, $password)
    {
        return $user && Hash::check($password, $user->password);
    }

    public static function find($field, $value)
    {
        return User::where($field, $value)->first();
    }
}
