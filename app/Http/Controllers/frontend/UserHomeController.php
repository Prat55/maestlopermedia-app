<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    protected function index()
    {
        return view('frontend.home');
    }

    protected function about(){
        return view('frontend.about');
    }

    protected function services(){
        return view('frontend.services');
    }

    protected function contact(){
        return view('frontend.contact');
    }
}
