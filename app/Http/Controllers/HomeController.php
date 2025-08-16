<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index() {
        return view('home');  // loads resources/views/home.blade.php
    }

    public function about() {
        return view('about'); // loads resources/views/about.blade.php
    }

    public function contact() {
        return view('contact'); // loads resources/views/contact.blade.php
    }
}
