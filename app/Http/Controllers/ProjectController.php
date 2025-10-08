<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project;
        $newProject->title = $data['title'];
        $newProject->description = $data['description'];
        $newProject->client = $data['client'];
        $newProject->category_id = $data['category_id'];
        $newProject->start_date = $data['startDate'];
        $newProject->end_date = $data['endDate'];
        $newProject->save();
        return redirect()->route('project.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->client = $data['client'];
        $project->category = $data['category'];
        $project->start_date = $data['startDate'];
        $project->end_date = $data['endDate'];
        $project->update();
        return redirect()->route('project.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index');
    }
}
