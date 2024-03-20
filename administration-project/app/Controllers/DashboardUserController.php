<?php

namespace App\Controllers;

class DashboardUserController extends BaseController
{
    public function index()
    {
        return view('/pagesUser/dashboardUser');
    }
}