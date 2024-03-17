<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LaporanModel;

class LaporanController extends BaseController
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
        return view('pages/laporan_kerja', $data);
    }

    public function hapus($id = null)
    {
        $hapus = $this->LaporanModel->where(array('id' => $id))->delete(); // jika type data idnya string, maka harus gunakan where()

        if ($hapus) : // jika kondisi true
            return redirect()->to('/laporan'); // kembalikan ke routes /barang
        else :
            
        endif;
    }

    public function edit()
    {
        return view('pages/edit_laporan');
    }
}
