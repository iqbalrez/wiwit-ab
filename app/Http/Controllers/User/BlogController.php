<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\BlogInterface;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    public function __construct(BlogInterface $blog)
    {
        $this->blog         = $blog;
    }
    public function index(){
        return view('user.blog.index');
    }

    public function detail($slug)
    {
        return view('user.blog.detail', [
            'blog'          => $this->blog->getBySlug($slug),
            'blogs'         => $this->blog->getAll(),
        ]);
    }
}
