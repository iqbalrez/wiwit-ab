<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialCategoryController extends Controller
{
    public function index()
    {
        return view('admin.material_category.index');
    }
}
