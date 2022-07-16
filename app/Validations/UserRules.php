<?php

namespace App\Validations;

use App\Models\UserModel;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $userModel = new UserModel();
        $user = $userModel->where('username', $data['username'])->first();
        if (!$user) {
            return false;
            return password_verify($data['password'], $user['password']);
        }
    }
}
