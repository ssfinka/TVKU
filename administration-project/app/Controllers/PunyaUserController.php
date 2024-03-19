<?php

namespace App\Controllers;

class PunyaUserController extends BaseController
{
    public function index()
    {
        return view('/pagesUser/dashboardUser');
    }

    public function tugas()
    {   
        return view('pagesUser/tugas');
    }

    public function rekap()
    {
        return view('pagesUser/rekap');
    } 

    public function profileUser()
    {
        return view('pagesUser/profileUser');
    } 
}
