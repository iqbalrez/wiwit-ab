<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkCategoryController extends Controller
{
    public function index()
    {
        return view('admin.work_category.index');
    }
}
