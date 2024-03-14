<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{

    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $db = \Config\Database::connect();
    }

    public function index()
    {
        $query = $this->UserModel->findAll();
        $data = [
            'result' => $query
        ];
        
        return view('pages/users_admin', $data);
    }

    public function tumbal()
    {
        $hi = $this->UserModel->findAll();
        dd($hi);
    }
}
