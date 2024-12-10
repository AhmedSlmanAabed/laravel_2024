<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/tasklist', function () {
    $tasks = DB::table('tasks')->get();
    return view('tasklist' , compact('tasks'));
});

Route::post('create', function(){
    $task_name = $_POST['name'];
    DB::table('tasks')->insert(['name' => $task_name]);
    return redirect()->back();
});

Route::post('delete/{id}' , function($id){
DB::table('tasks')->where('id' , $id)->delete();
return redirect()->back();
});
