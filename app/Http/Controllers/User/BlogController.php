<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('user.blog.index');
    }

    public function show(){
        return view('user.blog.detail');
    }

}
