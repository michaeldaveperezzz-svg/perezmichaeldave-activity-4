<?php

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('Usermodel');
    }

    public function show_users()
    {
        $users = $this->Usermodel->all();

        $data = [
            'users' => $users
        ];

        $this->call->view('users', $data);
    }
}