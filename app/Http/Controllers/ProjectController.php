<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::get();

        // Decode the JSON string to PHP array
        $projectArray = json_decode($projects, true);
        $project_des = Project::get();
        if (is_array($projectArray) && count($projectArray) > 0) {
            // Extract the first object (assuming there's at least one object)

            $title = $projectArray[0]['title'] ?? null;
            $body = $projectArray[0]['body'] ?? null;


            // Output the title and body
            return view('project', compact( 'title', 'body', 'project_des'));
        } else {
            dd('Invalid or empty JSON content.');
        }
    }
}
