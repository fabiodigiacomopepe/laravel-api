<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function testApi() {

        // URL: http://127.0.0.1:8000/api/v1/test-api

        return response()->json([
            'message' => 'test chiamata da controller api'
        ]);
    }

    public function projectIndex() {

        $projects = Project :: with('type') -> paginate(4);

        return response() -> json([
            'projects' => $projects
        ]);
    }

    public function projectDetail($id) {
        $project = Project :: findOrFail($id);

        return response() -> json([
            'project' => $project
        ]);
    }
}
