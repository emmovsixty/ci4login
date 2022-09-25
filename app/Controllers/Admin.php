<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->UserModel = new \Myth\Auth\Models\UserModel;
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        $this->builder->select('users.id as userid, username,email,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();
        $data['title'] = 'Admin page';
        return view('admin/index', $data);
    }

    public function detail($id)
    {
        $this->builder->select('users.id as userid, username,email,created_at, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $data['user'] = $query->getRow();
        $data['title'] = 'Detail User';
        return view('admin/detail', $data);
    }

    public function change_roll($id)
    {
        $this->UserModel
            ->whereIn('id', $id)
            ->set(['name' => 'admin'])
            ->update();
    }
}
