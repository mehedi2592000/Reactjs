@extends('Layouts.app')
@section('content')

<h2>create student</h2>

<form action="{{route('teacherCreate')}}" class="form-group" method="post">
    {{csrf_field()}}

    <lable for="" >Name</lable>
        <input type="text" name="name"value="{{old('name')}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >phone</lable>
        <input type="text" name="phone"value="{{old('phone')}}"class="form-control"> 
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    
    <lable for="" >email</lable>
        <input type="text" name="email"value="{{old('email')}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>


    <input type="submit" class="btn btn-primary" value="Add student">
</form>

@endsection