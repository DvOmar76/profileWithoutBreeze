<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Projects;
use App\Models\Skills;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class HomePage extends Controller
{
    public function index(){

        $courses=Courses::all();
        $skills=Skills::all();
        $projects=Projects::all();
        return view('welcome',compact(['courses','skills','projects']));
    }
}
