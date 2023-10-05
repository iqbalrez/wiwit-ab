<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('admin.dashboard');
    }
}
