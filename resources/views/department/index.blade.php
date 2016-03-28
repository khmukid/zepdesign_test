
@extends('layouts.master')

@section('title', 'Create Course')

@section('content')
    <div class="col-lg-10">
    <div class="table-responsive">
        <div class="text-center">
            <h2>Department Data Show</h2>
        </div>
        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th>Department Name</th>
                <th>Department Code</th>

                <th>Department Description</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($all_department as $department)
                <tr>
                    <td>{{$department->dep_name}}</td>
                    <td>{{$department->dep_code}}</td>

                    <td>{{$department->dep_description}}</td>
                    <td>
                        <a href="{{route('department.edit',$department->id)}}" class="btn btn-danger btn-xs fa fa-edit">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(array('route'=>['department.destroy',$department->id], 'class'=>'form-horizontal', 'method'=>'delete')) !!}
                        {!! Form::hidden('id',$department->id) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-warning btn-xs fa fa-remove'])!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
            {!! $all_department->render() !!}
        </table>
    </div>
    </div>
@endsection
