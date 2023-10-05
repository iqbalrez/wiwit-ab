<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactPageSettingController extends Controller
{
    public function index()
    {
        return view('admin.contact_page_setting.index');
    }
}
