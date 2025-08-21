<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        $task = new Task; //module Task this can access to any thing in database

        $request->validate([
    'task' => 'required|max:255|min:5'
]);
        
        
        $task->task = $request->input('task');
        $task->save();
        $data = Task::all();
        // dd($data);
        return view('task')->with('data', $data) ;
     
    }

    public function markCompleted($id){
        $task = Task::find($id);
        $task->completed= 1; // Assuming you want to mark the task as completed
        $task->save();
       return redirect('/task')->with('success', 'Task saved successfully!');
    }
}
