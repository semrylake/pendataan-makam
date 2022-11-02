<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;
use Firebase\JWT\JWT;

class Login extends ResourceController
{
    protected $format = 'json';
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];
        if (!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $user = $this->UserModel->where("username", $username)->first();

        if (!$user) return $this->failNotFound('username Not Found', 404);

        $verify = password_verify($password, $user['password']);
        if (!$verify) return $this->fail('Data login tidak valid.');

        $token = getenv('JWT_SECRET');
        $nowTime = time();
        $exp = $nowTime + 3600;

        $payload = [
            'iss' => 'risalbutik',
            'sub' => 'logintoken',
            'iat' => $nowTime,
            'exp' => $exp,
            'username' => $username,
        ];

        $token = JWT::encode($payload, $token, 'HS256');

        return $this->respond([
            'status' => true, 
            'token' => $token,
            'token_exp'=> $exp,
        ]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
