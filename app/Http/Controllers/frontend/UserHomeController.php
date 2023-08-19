<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    protected function index()
    {
        $posts = Post::latest()->take(10)->get();
        return view('frontend.home')->with('posts', $posts);
    }

    protected function about()
    {
        return view('frontend.about');
    }

    protected function services()
    {
        return view('frontend.services');
    }

    protected function portfolio()
    {
        $posts = Post::latest()->get();
        $services = Service::all();
        return view('frontend.portfolio')->with('posts', $posts)->with('services', $services);
    }

    protected function contact()
    {
        return view('frontend.contact');
    }
}
