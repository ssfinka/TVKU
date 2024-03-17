<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{

    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $db = \Config\Database::connect();
    }

    public function index(): string
    {
        return view('layouts/template');
    }

    public function profileAdmin()
    {
        return view('pages/profile_admin');
    }
}
