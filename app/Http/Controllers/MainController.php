<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class MainController extends Controller
{
    public function home()
    {
        $projects = Project::all();

        return view("pages.home", compact('projects'));
    }

    public function projectShow(Project $project)
    {
        return view("pages.show", compact('project'));

    }

    public function projectDelete(Project $project)
    {
        $project->delete();
        return redirect()->route('home');
    }

    public function projectCreate()
    {
        return view('pages.create');
    }

    public function projectStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:projects|max:64',
            'description' => 'nullable|string',
            'main_image' => 'nullable|string|unique:projects',
            'release_date' => 'nullable|date|before:now',
            'repo_link' => 'required|string|unique:projects'
        ]);

        $project = Project::create($data);
        $project->save();

        return redirect()->route('home');

    }

}