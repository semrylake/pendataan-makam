<?php

namespace App\Controllers;


class User extends BaseController
{
    // protected $MakamModel;

    public function __construct()
    {
    }
    public function index()
    {
        return view('users/index');
    }
}
