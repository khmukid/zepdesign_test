<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Department;

class DepartmentController extends Controller
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
            $all_department=Department::paginate(2);
            $name=Auth::user()->name;
            return view('department/index',array('name' => $name, 'all_department'=>$all_department));
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
            return view('department/create',array('name' => $name));
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
            $data=Department::create($input);

            return $data;
        }
        return redirect('/auth/login');
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
            $department=Department::findOrFail($id);
            $name=Auth::user()->name;
            return view('department/edit',array('name' => $name, 'department'=>$department));
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
            $data=Department::findOrFail($id);
            $update_data=$data->update($input);

            return $update_data;
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

            $data=Department::findOrfail($id);

            $data->delete();

            return redirect('/department');
        }
        return redirect('/auth/login');
    }
}
