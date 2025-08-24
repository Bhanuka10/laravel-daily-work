<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', function () {
    $data = App\Models\Task::all();
    return view('Task')->with('data',$data);
});

use App\Http\Controllers\TaskController;


Route::post('/savetask', [TaskController::class, 'store']);

Route::get('/mark-completed/{id}', [TaskController::class, 'markCompleted']);

Route::get('/mark-incomplete/{id}', [TaskController::class, 'markIncomplete']);

Route::get('/delete-task/{id}', [TaskController::class, 'destroy']);

Route::get('/edit-task/{id}', [TaskController::class, 'edit']);

Route::post('/saveupdate', [TaskController::class, 'update']);
