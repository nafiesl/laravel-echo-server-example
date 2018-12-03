<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function fetchAll()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        Task::create($request->all());

        return response()->json('added');
    }

    public function delete(Task $task)
    {
        $task->delete();

        return response()->json('deleted');
    }
}
