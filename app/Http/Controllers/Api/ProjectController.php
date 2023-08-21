<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function testApi() {

        // URL: http://127.0.0.1:8000/api/v1/test-api

        return response()->json([
            'message' => 'test chiamata da controller api'
        ]);
    }
}
