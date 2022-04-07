@extends('Layouts.app')
@section('content')

<h2>create student</h2>

<form action="{{route('studentEdit')}}" class="form-group" method="post">
    {{csrf_field()}}

    <lable for="" >ID</lable>
        <input type="text" name="id"value="{{$student->id}}"class="form-control"> 
        @error('id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>


    <lable for="" >Name</lable>
        <input type="text" name="name"value="{{$student->name}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >ID</lable>
        <input type="text" name="student_id"value="{{$student->student_id}}"class="form-control"> 
        @error('id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >DOB</lable>
        <input type="text" name="dob"value="{{$student->dob}}"class="form-control"> 
        @error('dob')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    

    <input type="submit" class="btn btn-primary" value="Edit student">
</form>

@endsection