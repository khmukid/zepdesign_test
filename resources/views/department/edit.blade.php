
@extends('layouts.master')

@section('title', 'Create Course')

@section('content')
    <div class="container col-lg-6">
        <div class="row text-center">
            <h2>Department Update</h2>
        </div>
        <form role="form" id="department_update" class="form-horizontal" >
            {!! csrf_field() !!}
            <div class="form-group">
                <label>Department Name</label>
                <input name="department_name" value="{{$department->dep_name}}" class="form-control">

            </div>
            <div class="form-group">
                <label>Department Code</label>
                <input name="department_code" value="{{$department->dep_name}}" class="form-control">

            </div>
            <div class="form-group">
                <label>Department Description</label>
                <input name="department_description" value="{{$department->dep_name}}" class="form-control">

            </div>
            <button type="submit" id="department_submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection