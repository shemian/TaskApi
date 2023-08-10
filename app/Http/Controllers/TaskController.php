<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        if($tasks->count() > 0){
            return response()->json(  [
                'status' => 200,
                'tasks' => $tasks
            ], 200);
        }else{
            return response()->json(  [
                'status' => 404,
                'Message' => "No Task available at the moment!!"
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $data = $request->validated();

        $newTask = new Task();
        $newTask->name = $data['name'];
        $newTask->description = $data['description'];
        $newTask->save();

        return response()->json([
            'status' => 201,
            'message' => 'Task Created Successfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);
        if($task){
            return response()->json([
                'status' => 200,
                'task' => $task,
            ], 200);
        } else{
            return response()->json([
                'status' => 404,
                'message' => 'Task Not Found'
            ], 404);
        }

    }

    /**
     * Edit the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);
        if($task){
            return response()->json([
                'status' => 200,
                'task' => $task,
            ], 200);
        } else{
            return response()->json([
                'status' => 404,
                'message' => 'Task Not Found'
            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, string $id)
    {
        $data = $request->validated();

        $updateTask = Task::find($id);

        if (!$updateTask) {
            return response()->json([
                'status' => 404,
                'message' => 'Task not found',
            ], 404);
        }

        $updateTask->name = $data['name'];
        $updateTask->description = $data['description'];

        if ($updateTask->save()) {
            return response()->json([
                'status' => 200,
                'message' => 'Task Updated Successfully'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while updating the task',
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteTask = Task::find($id);

        if (!$deleteTask) {
            return response()->json([
                'status' => 404,
                'message' => 'Task not found',
            ], 404);
        }

        if ($deleteTask->delete()) {
            return response()->json([
                'status' => 200,
                'message' => 'Task Deleted Successfully',
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while deleting the task',
            ], 500);
        }
    }
}
