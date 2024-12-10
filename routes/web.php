<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $name = 'ahmed';
    $departments = [
        '01' => 'helth',
        '02' => 'mony',
        '03' => 'defance'
        ];
   // return view('about') ->with( 'name' , $name);
  // return view('about' , ['name' => $name]);
   return view('about' , compact('name', 'departments'));
}); 
Route::post('/about', function () {
    $name = $_POST['name'];
    $departments = [
        '01' => 'helth',
        '02' => 'mony',
        '03' => 'defance'
        ];
    return view('about' , compact('name'));
});

Route::get('/tasklist' , [TaskController::class , 'index']);

Route::post('create', [TaskController::class , 'create']);

Route::post('delete/{id}' , [TaskController::class , 'destroy']);

Route::post('edit/{id}' , [TaskController::class , 'edit'] );

Route::post('update' , [TaskController::class , 'update']);