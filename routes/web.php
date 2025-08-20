<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', function () {
    // $data = App\Models\Task::all();
    return view('Task')
    // ->with('data',$data);
});

use App\Http\Controllers\TaskController;


Route::post('/savetask', [TaskController::class, 'store']);
