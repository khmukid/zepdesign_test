<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\Course;

use App\Http\Controllers\Controller;

class CourseController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::check())
        {
            $all_course=Course::paginate(2);
            $name=Auth::user()->name;
            return view('course/index',array('name' => $name, 'all_course'=>$all_course));
        }

        return redirect('/auth/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check())
        {
            $name=Auth::user()->name;
            return view('course/create',array('name' => $name));
        }

        return redirect('/auth/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()) {
            $input = $request->all();
            Course::create($input);

            return redirect('/course');
        }
        return redirect('/auth/login');
        //$course->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check())
        {
            $course=Course::findOrFail($id);
            $name=Auth::user()->name;
            return view('course/edit',array('name' => $name, 'course'=>$course));
        }

        return redirect('/auth/login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check()) {
            $input = $request->all();
            $data=Course::findOrfail($id);

            $data->update($input);

            return redirect('/course');
        }
        return redirect('/auth/login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()) {

            $data=Course::findOrfail($id);

            $data->delete();

            return redirect('/course');
        }
        return redirect('/auth/login');
    }
}
