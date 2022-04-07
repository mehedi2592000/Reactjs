@extends('Layouts.app')
@section('content')

<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Date otf the </th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->id}}</td>
        <td>{{$student->dob}}</td>
      

</tr>
@endforeach

</table>

@endsection