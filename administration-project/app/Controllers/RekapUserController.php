<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LaporanModel;

class RekapUserController extends BaseController
{
    protected $LaporanModel;

    public function __construct()
    {
        $this->LaporanModel = new LaporanModel();
        $db = \Config\Database::connect();
    }

    public function index()
    {   
        $query = $this->LaporanModel->findAll();
        $data = [
            'result' => $query
        ];

        return view('pagesUser/rekap', $data);
    }

    public function edit($id)
    {
        $result = $this->LaporanModel->find($id);

        $data = [
            'result' => $result
        ];
        return view('pagesUser/editUser', $data);
    }

    public function hapus($id = null)
    {
        $hapus = $this->LaporanModel->where(array('id' => $id))->delete(); 

        if ($hapus) : 
            return redirect()->to('/rekap'); 
        else :
            
        endif;
    }
}