<?php

namespace App\Controllers;


class User extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        // $users = new \Myth\Auth\Models\UserModel();
        // $datausers = $users->findAll();

        $this->builder->select('users.id as userId, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data = [
            'datausers' => $query->getResult(),
            'title' => 'Data Users'
        ];
        return view('users/index', $data);
    }
    public function editUser($id = 0)
    {
        $this->builder->select('users.id as userId, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $users = $query->getRow();
        if (empty($users)) {
            return redirect()->to('/admin');
        }
        $data = [
            'datausers' => $users,
            'title' => 'Data Users'
        ];
        return view('users/editUser', $data);
    }
}
