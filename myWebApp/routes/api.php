<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/postData',function (Request $request){
    $content = $request->getContent();
    return $content;
})->middleware('auth:sanctum');
