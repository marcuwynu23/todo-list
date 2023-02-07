<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   


    
    public function index()
    {
        $todos = Todo::all();
        return view("todo.index", compact('todos'));
    }




    public function create()
    {
        return view('todo.create');
    }

   

    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect()->route('todo.index');
    }

   
    public function show($id)
    {
        return redirect()->route('todo.index');
    }
   
   
   
    public function edit(Todo $todo)
    {
        return view('todo.edit', compact("todo"));
    }

   
   
   
    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect()->route('todo.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
