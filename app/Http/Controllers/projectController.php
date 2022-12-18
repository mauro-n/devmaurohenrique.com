<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function portfolio() {
        return view('portfolio');
    }
}
