<?php

namespace App\Controllers;


class Admin extends BaseController
{
    // protected $MakamModel;

    public function __construct()
    {
    }
    public function index()
    {
        return view('admin/index');
    }
}
