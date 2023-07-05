<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }

    function about()
    {
        return view('about');
    }

    function catalog()
    {
        return view('catalog');
    }

    function contact()
    {
        return view('contact');
    }
}