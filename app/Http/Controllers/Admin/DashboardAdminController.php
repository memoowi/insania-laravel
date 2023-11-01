<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('dashboard.features.welcome');
    }
    public function serviceNew()
    {
        return view('dashboard.features.service-new');
    }
}
