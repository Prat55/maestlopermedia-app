<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    protected function index()
    {
        $posts = Post::all();
        $services = Service::all();
        return view('admin.addservice')->with('posts', $posts)->with('services', $services);
    }
}
