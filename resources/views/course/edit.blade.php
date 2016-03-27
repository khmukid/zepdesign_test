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
        {!! Form::open(array('route'=>['course.update',$course->id], 'class'=>'form-horizontal', 'method'=>'put')) !!}

            <div class="form-group">
                <label>Course Name</label>
                <input name="course_name" value="{{$course->course_name}}" class="form-control">

            </div>
            <div class="form-group">
                <label>Course Code</label>
                <input name="course_code" value="{{$course->course_code}}" class="form-control">

            </div>
            <div class="form-group">
                <label>Course Credit</label>
                <input name="course_credit" value="{{$course->course_credit}}" class="form-control">

            </div>
            <div class="form-group">
                <label>Course Description</label>
                <input name="course_description" value="{{$course->course_description}}" class="form-control">

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        {!! Form::close() !!}
    </div>
@endsection
