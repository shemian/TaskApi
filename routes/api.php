<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('login',[UserController::class,'loginUser']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/tasks', [TaskController::class, 'index']);
    Route::post('/create-task', [TaskController::class, 'store'])->middleware('validateTaskData');
    Route::get('/tasks/{id}', [TaskController::class, 'show']);
    Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
    Route::put('/tasks/{id}/update', [TaskController::class, 'update'])->middleware('validateTaskData');
    Route::delete('/tasks/{id}/delete', [TaskController::class, 'destroy']);
});


