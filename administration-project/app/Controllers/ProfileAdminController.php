<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProfileAdminController extends BaseController
{
    public function index()
    {
        return view('pages/profile_admin');
    }
}
