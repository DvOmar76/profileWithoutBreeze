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
//        dd($request->file('certificate_url'));
        $validatedData = $request->validate([
            'course_title' => 'required|string|max:1999',
            'certificate_url' => 'required|mimes:pdf|max:1999',
            'image_url' => 'required|mimes:png,jpeg,apng|max:1999',

        ]);
//        dd($validatedData);

        $nameCertificate = $request->file('certificate_url')->getClientOriginalName().time();
        $pathCertificate=$request->file('certificate_url')->store('public/courses');
        $nameImage = $request->file('image_url')->getClientOriginalName().time();
        $pathImage= $request->file('image_url')->store('public/image/course');
        $request->certificate_url->move($pathCertificate,$nameCertificate);
        $request->image_url->move($pathImage,$nameImage);
        $courses=new Courses();
        $courses->create([
            'course_title'=>$request->course_title,
            'image_url'=>$pathImage,
            'certificate_url'=>$pathCertificate
        ]);



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
