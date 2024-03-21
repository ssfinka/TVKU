<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LaporanModel;

class TugasController extends BaseController
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

        return view('pagesUser/tugas', $data);
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
            return redirect()->to('/tugas'); 
        else :
            
        endif;
    }

    public function tambahtugas()
    {
        $data = [
            'nama' => $this->request->getVar('nama_pegawai'),
            'nama_tugas' => $this->request->getVar('nama_tugas'),
            'tanggal' => $this->request->getVar('tanggal'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];
        $this->LaporanModel->insert($data); // Insert data dari $data ke database

        return redirect()->to('/tugas');
    }

    public function simpanLaporan()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];

        $this->LaporanModel->simpanLaporan($data); // update data

        return redirect()->to('/tugas');
    }
}