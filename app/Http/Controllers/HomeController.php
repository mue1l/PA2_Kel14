<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.web.dashboard.mainDashboard');
    }
    public function show()
    {
        return view('pages.admin.dashboard.main');
    }
}
