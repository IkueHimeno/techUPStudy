<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [\App\Http\Controllers\TodoListController::class, 'index']);

Route::get('/',[TaskController::class,'index']);  //一覧表示用のURLとコントローラ場所
Route::post('/create',[TaskController::class,'create']);  //タスク追加用のURLとコントローラ場所
Route::post('/edit',[TaskController::class,'edit']);  //タスク更新用
Route::post('/delete',[TaskController::class,'delete']);  //タスク削除用

Route::resource('tasks', TaskController::class);