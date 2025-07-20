<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogModel::latest()->paginate(9);
        return view('frontView.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = BlogModel::where('slug', $slug)->firstOrFail();
        return view('frontView.blogs.show', compact('blog'));
    }
}
