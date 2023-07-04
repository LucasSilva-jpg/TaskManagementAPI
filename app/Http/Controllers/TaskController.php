<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        $tasks->transform(function ($task) {
            $task->status = $task->status ? 'Concluída' : 'Não concluída';
            return $task;
        });

        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $status = $request->input('status') === 'false' || $request->input('status') === 0 ? 0 : 1;

    
        $task = Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $status,
        ]);
    
        $response = [
            'title' => $task->title,
            'description' => $task->description,
            'status' => $status ? 'Concluída' : 'Não concluída',
            'updated_at' => $task->updated_at,
            'created_at' => $task->created_at,
            'id' => $task->id,
        ];
    
        return response()->json($response);
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function update(Request $request, Task $task)
{
    $status = $request->input('status') === 'false' || $request->input('status') === '0' ? 0 : 1;
    
    $task->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'status' => $status,
    ]);

    $response = [
        'title' => $task->title,
        'description' => $task->description,
        'status' => $status ? 'Concluída' : 'Não concluída',
        'updated_at' => $task->updated_at,
        'created_at' => $task->created_at,
        'id' => $task->id,
    ];

    return response()->json($response);
}

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}