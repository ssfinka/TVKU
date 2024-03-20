<?php

namespace App\Controllers;

class RekapUserController extends BaseController
{
    public function index()
    {   
        return view('pagesUser/rekap');
    }
}