<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function index()
    {
        return view('admin.event_category.index');
    }
}
