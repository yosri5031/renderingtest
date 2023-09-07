<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        return response()->json($projects);
    }

    public function store(Request $request)
    {
        $project = Projects::create($request->all());
        return response()->json($project, 201);
    }

    public function show($id)
    {
        $project = Projects::findOrFail($id);
        return response()->json($project);
    }

    public function update(Request $request, $id)
    {
        $project = Projects::findOrFail($id);
        $project->update($request->all());
        return response()->json($project);
    }

    public function destroy($id)
    {
        Projects::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}