<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index() {
        return view('home');
    }

    public function aboutme() {
        return view('aboutme');
    }

    public function contact() {
        return view('contact');
    }

    public function admin() {
        return view('admin');
    }
}
