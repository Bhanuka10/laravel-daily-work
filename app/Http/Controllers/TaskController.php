<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        $task = new Task; //module Task this can access to any thing in database
        $task->task = $request->input('task');
        $task->save();
        return redirect()->back();
    }
}
