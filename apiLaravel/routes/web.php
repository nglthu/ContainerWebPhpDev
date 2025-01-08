<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{id}', function (string $id)
{
    return new UserResource(User::findOrFail($id));
});
