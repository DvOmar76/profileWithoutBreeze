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

        $nameCertificate =time().$request->file('certificate_url')->getClientOriginalName();
        $pathCertificate='storage/courses';
        $certificate_path=$request->file('certificate_url')->storeAs($pathCertificate,$nameCertificate);

        $nameImage = time().$request->file('image_url')->getClientOriginalName();
        $pathImage= 'storage/image/course';
        $image_path=$request->file('image_url')->storeAs($pathImage,$nameImage);
        $request->image_url->move($pathImage,$nameImage);
        $request->certificate_url->move($pathCertificate,$nameCertificate);

        $courses=new Courses();
        $courses->create([
            'course_title'=>$request->course_title,
            'image_url'=>$image_path,
            'certificate_url' =>$certificate_path
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
