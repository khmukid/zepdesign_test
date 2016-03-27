<?php
/**
 * Created by PhpStorm.
 * User: mukid
 * Date: 3/25/2016
 * Time: 8:18 PM
 */
        ?>
@extends('layouts.master')

@section('title', 'Create Course')

@section('content')
    <div class="col-lg-10">
    <div class="table-responsive">
        <div class="text-center">
            <h2>Course Data Show</h2>
        </div>
        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Course Credit</th>
                <th>Course Description</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($all_course as $course)
                <tr>
                    <td>{{$course->course_name}}</td>
                    <td>{{$course->course_code}}</td>
                    <td>{{$course->course_credit}}</td>
                    <td>{{$course->course_description}}</td>
                    <td>
                        <a href="{{route('course.edit',$course->id)}}" class="btn btn-danger btn-xs fa fa-edit">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(array('route'=>['course.destroy',$course->id], 'class'=>'form-horizontal', 'method'=>'delete')) !!}
                        {!! Form::hidden('id',$course->id) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-warning btn-xs fa fa-remove'])!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
            {!! $all_course->render() !!}
        </table>
    </div>
    </div>
@endsection
