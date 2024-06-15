<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function feature()
    {
        return view('feature');
    }

    public function philosophy()
    {
        return view('philosophy');
    }

    public function overview()
    {
        return view('overview');
    }

    public function about()
    {
        return view('about');
    }

    public function memory()
    {
        return view('memory');
    }

    public function academy()
    {
        return view('academy');
    }

    public function achievement()
    {
        return view('achievement');
    }



}
