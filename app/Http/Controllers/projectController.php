<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class projectController extends Controller
{
    public function portfolio() {
        $projects = Project::all();

        return view('portfolio', ['projects' => $projects]);
    }
}
