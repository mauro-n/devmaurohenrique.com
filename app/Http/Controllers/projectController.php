<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class projectController extends Controller
{
    public function project() {
        $projects = Project::all();
        return view('portfolio', ['projects' => $projects]);
    }
    public function add() {
        return view('addproject');
    }

    public function store(Request $request) {
        $project = new Project;
        if (!isset($request->public)) {$request->public = 0;};
        if (!isset($request->link)) {$request->link = "#";};
        $project->title = $request->title;
        $project->description = $request->description;
        $project->tech = $request->tech;
        $project->public = $request->public;
        $project->link = $request->link;

        $project->save();
        return redirect('/portfolio');
    }
}
