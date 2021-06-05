@extends('layout')

@section('title')
    New Task
@endsection

@section('content')

    <form action="addTask" method="post">
		@csrf
		<label for="name">Task Name:</label>
		<input type="text" name="title"><br>
		<label for="description">Task Description:</label>
		<textarea name="description"></textarea><br>
		<input type="submit" value="Submit">
    </form>

@endsection