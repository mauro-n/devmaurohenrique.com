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

    public function store(Request $request) {
        $project = new Project;
        if (!isset($request->public)) {$request->public = 0;};
        $project->title = $request->title;
        $project->description = $request->description;
        $project->tech = $request->tech;

        $project->save();
        return redirect('/portfolio');
    }
}
