<?php

namespace App\Controllers;


class Home extends BaseController
{
    // protected $MakamModel;

    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => "Login",
        ];
        return view('index', $data);
    }
    // public function register()
    // {
    //     $data = [
    //         'title' => "Register",
    //         'validasi' => \Config\Services::validation()
    //     ];
    //     return view('register', $data);
    //     // return view('register');
    // }
    // public function saveAdmin()
    // {
    //     // dd($this->request->getVar());
    //     if (!$this->validate([
    //         'name' => 'required',
    //         'username' => 'required|is_unique[users.username]',
    //         'password' => 'required|min_length[5]',
    //     ])) {
    //         $validasi = \Config\Services::validation();
    //         return redirect()->to('/register')->withInput()->with('validasi', $validasi);
    //     }
    //     $userModel = new UserModel();
    //     $userModel->save([
    //         'name' => $this->request->getVar('name'),
    //         'username' => $this->request->getVar('username'),
    //         'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
    //         'rules' => "admin",
    //     ]);
    //     session()->setFlashdata('success', 'Data berhasil disimpan silahkan login');
    //     return redirect()->to('/');
    // }
    // public function loginProcess()
    // {
    //     // dd($this->request->getVar());
    //     if (!$this->validate([
    //         'username' => 'required',
    //         'password' => 'required|min_length[5]',
    //     ])) {
    //         $validasi = \Config\Services::validation();
    //         return redirect()->to('/')->withInput()->with('validasi', $validasi);
    //     }
    // }
    public function profile()
    {
        return view('users/index');
    }
}
