<?php
/**
 * Created by PhpStorm.
 * User: mukid
 * Date: 3/25/2016
 * Time: 8:17 PM
 */
?>
@extends('layouts.master')

@section('title', 'Create Course')

@section('content')
    <div class="container col-lg-6">
        <div class="row text-center">
            <h2>Course Entry</h2>
        </div>
<form role="form" method="post" action="/course" class="form-horizontal" >
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Course Name</label>
        <input name="course_name" class="form-control">

    </div>
    <div class="form-group">
        <label>Course Code</label>
        <input name="course_code" class="form-control">

    </div>
    <div class="form-group">
        <label>Course Credit</label>
        <input name="course_credit" class="form-control">

    </div>
    <div class="form-group">
        <label>Course Description</label>
        <input name="course_description" class="form-control">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
@endsection