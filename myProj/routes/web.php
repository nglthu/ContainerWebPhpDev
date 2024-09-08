<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\StudentController;
use App\Http\Controllers\StudentAdd;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/webNC03', function () {
    return view('webNC03');
});



Route::get('/student', [StudentAdd::class, 'index'])->name('webNC03');

