<?php

namespace App\Http\Controllers\Client\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view('clients.blogs.index');
    }
}
