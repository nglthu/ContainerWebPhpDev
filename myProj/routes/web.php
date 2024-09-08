<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/webNC03', function () {
    return view('webNC03');
});



Route::get('/student', [StudentController::class, 'index']);

