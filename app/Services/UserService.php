<?php

namespace App\Services;

use App\Models\User;

class UserService
{

    public function getAllUsers()
    {
        return User::all();
    }


    public function createUser(array $data)
    {
        return User::create($data);
    }

}
