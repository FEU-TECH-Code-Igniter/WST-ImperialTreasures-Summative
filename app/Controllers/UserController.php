<?php

namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index(): string
    {
        $user_model = new UserModel();
        $data['tb_promotional'] = $user_model->findAll();
        return view('dashboard', $data);
    }
}
