<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('website.home.home');
    }

    public function courses()
    {
        return view('website.home.courses');
    }

    public function details()
    {
        return view('website.home.courseDetails');
    }
}
