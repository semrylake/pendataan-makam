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
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/index', $data);
    }
}
