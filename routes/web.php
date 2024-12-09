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
Route::get('/tasklist', function () {
    return view('tasklist');
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