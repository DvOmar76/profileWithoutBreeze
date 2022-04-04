<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Messages;
use App\Models\Projects;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request){
//        $username=Auth::user()->name;
//        $messages=Messages::all();
//        $show=$request->show;
//        $courses=Courses::all();
//        $skills=Skills::all();
//        $project=Projects::all();
        $show='';
        return view('dashboard',compact("show"));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
