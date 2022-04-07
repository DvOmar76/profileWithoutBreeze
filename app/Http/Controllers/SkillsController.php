<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function __construct(){
//        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $show='newSkills';
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
        $skills=new Skills();
        $skills->create($request->all());
        return redirect('skills.show');
    }


    public function show()
    {
        $skills=Skills::all();
//        dd($skills);
        $show='skills';
        return view('dashboard',compact(['skills','show']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit(Skills $skills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//       dd($request->all());
       $courses=new Skills();
       $courses->find($request->id)->update($request->all());
       return redirect('skills.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $skills=new Skills();
        $skills->destroy($request->id);
        return redirect('skills.show');
    }
}
