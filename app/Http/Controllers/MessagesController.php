<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth')->except('store');
    }
    public function index()
    {

    }


    public function create(Request $request)
    {


    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'subject'=>'required|string',
            'contentMessage'=>'required|string',
        ]);
        $message=new Messages();
        $message->create($request->all());
        $alert='your message is received';
        return redirect()->route('home',compact('alert'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages)
    {
        $messages=Messages::all();
        $show='messages';
        return view('dashboard',compact(['messages','show']));
    }



    public function destroy(Request $request)
    {
        $messages=new Messages;
        $messages->destroy($request->id);
        return redirect()->route('dashboard/message');
    }
}
