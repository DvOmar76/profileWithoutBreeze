<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct(){
//        $this->middleware('auth');
    }
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $show='newCourse';
        return view('dashboard',compact('show'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courses=new Courses();
        $courses->create($request->all());
        return redirect('courses.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $courses=Courses::all();
        $show='courses';
        return view('dashboard',compact(['courses','show']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $courses=new Courses();
        $course=$courses->find($request->id);
        $show='editCourse';
        return view('dashboard',compact(['show','course']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        dd(request()->all());
        $courses=new Courses();
        $courses->find(request()->id)->update(request()->all());
        return redirect('courses.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
//        dd();
        $courses=new Courses();
        $courses->destroy($request->id);
        return redirect('courses.show');

    }
}
