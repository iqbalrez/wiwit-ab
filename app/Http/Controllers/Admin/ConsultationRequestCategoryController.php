<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationRequestCategoryController extends Controller
{
    public function index()
    {
        return view('admin.consultation_request_category.index');
    }
}
