<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', function () {
    return view('Task');
});

use App\Http\Controllers\TaskController;


Route::post('/savetask', [TaskController::class, 'store']);
