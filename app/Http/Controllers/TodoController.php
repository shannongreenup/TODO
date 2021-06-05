<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
		$todo = Todo::all();
		return view('index')->with('todos', $todo);
	}
	
	public function newTask(){
		return view('new');
	}


	public function addTask(){
        try {
            $this->validate(request(), [
                'title' => ['required'],
                'description' => ['required']
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();


        $todo = new Todo();
        $todo->title = $data['title'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/');
	}
}
