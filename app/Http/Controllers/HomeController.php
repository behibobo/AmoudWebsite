<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.home');
    }
    public function about()
    {
        return view('home.about');
    }
    public function gallery()
    {
        return view('home.gallery');
    }
    public function projects()
    {
        return view('home.projects');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function products($slug)
    {
        return view('home.'.$slug);
    }
}
