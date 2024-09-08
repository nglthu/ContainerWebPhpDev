<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webNC03', function () {
    return view('webNC03');
});

Route::post('/student', function($user){

});

Route::get('/studentName', "HomeController@studentName");