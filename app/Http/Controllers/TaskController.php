<?php

namespace App\Http\Controllers;

use App\Task;
use App\Events\TaskCreated;
use App\Events\TaskRemoved;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function fetchAll()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());
        broadcast(new TaskCreated($task));

        return response()->json('added');
    }

    public function delete(Task $task)
    {
        broadcast(new TaskRemoved($task));
        $task->delete();

        return response()->json('deleted');
    }
}
