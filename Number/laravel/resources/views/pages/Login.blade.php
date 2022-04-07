@extends('Layouts.app')
@section('content')
<form action="{{route('Login')}}" method="post">

	{{@csrf_field()}}

	<input type="text" name="email" placeholder="email"><br>
	<input type="password" name="phone" placeholder="Password"><br>
	<input type="checkbox" name="remember"> Remember Me<br>
	<input type="submit" name="" value="Login">
</form>
@endsection 