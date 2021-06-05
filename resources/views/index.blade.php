@extends('layout')
@section('title')
	TODO App
@endsection
@section('content')
	@foreach($todos as $todo)
		<li>{{$todo->title}} <br> {{$todo->description}}</li>
	@endforeach
@endsection