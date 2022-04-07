@extends('Layouts.app')
@section('content')

<h1>fuck you</h1>

<ul>
    @foreach($name as $n)
        <li>{{$n}}</li>
    @endforeach
</ul>

@endsection