<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AkunModel;

class AuthController extends BaseController
{
    protected $AkunModel;

    public function index()
    {
        return view('auth/login');
    }
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
        $db = \Config\Database::connect();
    }

    public function postlogin()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $log = $this->AkunModel->getData($email);

        if ($password == $log->password) {
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/');
        }

        // if (password_verify($password, $log->password)) {
        //     $data = [
        //         'login' => true,
        //         'email' => $log->email,
        //     ];
        //     session()->set($data);

        //     return redirect()->to('/')->with('msg', 'Berhasil Login');
        // }
    }

    public function register()
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $this->AkunModel->insert($data); // Insert data dari $data ke database

        return redirect()->to('/'); // kembalikan ke routes '/'
    }

    public function logout()
    {  
        return redirect()->to('/');
    }
}
