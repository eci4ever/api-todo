<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
//use Illuminate\Http\Request;
use App\Todo;

class TodosApiController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return $todos;
    }

    public function store(StoreTodoRequest $request)
    {
        return Todo::create($request->all());
    }

    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        return $todo->update($request->all());
    }

    public function show(Todo $todo)
    {
        return $todo;
    }

    public function destroy(Todo $todo)
    {
        return $todo->delete();
    }
}
