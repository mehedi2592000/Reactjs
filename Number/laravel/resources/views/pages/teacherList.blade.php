@extends('Layouts.app')
@section('content')

<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>phone</th>
        
    </tr>
    @foreach($teachers as $teacher)
    <tr>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->phone}}</td>
        


</tr>
@endforeach

</table>

@endsection