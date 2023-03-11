<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;

class MainController extends Controller
{
    public function home()
    {
        $projects = Project::orderBy('release_date', 'desc')->get();

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
            'main_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'nullable|date|before:now',
            'repo_link' => 'required|string|unique:projects'
        ]);

        $imgPath = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $imgPath;

        $project = Project::create($data);
        $project->save();

        return redirect()->route('home');

    }

    public function projectEdit(Project $project)
    {
        return view('pages.edit', compact('project'));
    }

    public function projectUpdate(Request $request, Project $project)
    {
        $data = $request->validate([
            'name' => 'required|string|max:64|unique:projects,name,' . $project->id,
            'description' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'nullable|date|before:now',
            'repo_link' => 'required|string|unique:projects,repo_link,' . $project->id
        ]);

        if (array_key_exists("main_image", $data)) {

            $img_path = Storage::put('uploads', $data['main_image']);
            $data['main_image'] = $img_path;
        }

        $project->update($data);

        return redirect()->route('home');
    }

}