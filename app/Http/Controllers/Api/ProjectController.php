<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(9);
        return response()->json([
            'succes' => true,
            'result' => $projects
        ]);
    }

    public function show(Project $project)
    {
        return response()->json([
            'succes' => true,
            'result' => $project
        ]);
    }
}
