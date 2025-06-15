<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function posts()
    {
        return view('yoicot.blog.posts');
    }

    public function post()
    {
        return view('yoicot.blog.post');
    }
}
