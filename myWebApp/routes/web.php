<?php

use App\Http\Controllers\EditDeleteStudentController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Resources\StudentResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/postData',function (Request $request){
    $content = $request->getContent();
    return "hello";
});

Route::get('/user/{id}', function (string $id)
{
    return new UserResource(User::findOrFail($id));
});


Route::get('/bookDisplay',[BookController::class, 'index'] )->name('book');


Route::post('/book',[BookController::class, 'sendData']);


//Route::get('/book', 'App\Http\Controllers\BookController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@listStudent');

Route::get('/studentNew', 'App\Http\Controllers\StudentController@createStudent');
Route::get('/bookDisplay',[BookController::class, 'index'] )->name('book');


Route::post('/book',[BookController::class, 'sendData']);

//Route::get('/book', 'App\Http\Controllers\BookController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@listStudent');
//Route::get('/edit',[EditController::class, 'index']);

Route::post('/edit', 'App\Http\Controllers\EditController@index')->name('edit');

Route::post('/editDeleteStudent/{id}', 'App\Http\Controllers\EditDeleteStudentController@optStudent')->name('delete');
Route::get('/getDeleteStudent/{id}', [EditDeleteStudentController::class, 'optStudent'])->name('getDelete');

Route::get('/getEditStudent/{id}', 'App\Http\Controllers\EditDeleteStudentController@editStudent')->name('getEdit');
Route::get('/usertest', 'App\Http\Controllers\UserController@index');

Route::post('/saveStudent', 'App\Http\Controllers\SaveStudentController@index')->name('saveStudent');
Route::post('/saveStudentNew', 'App\Http\Controllers\SaveStudentController@saveNewStudent')->name('saveStudentNew');
Route::get('/test', [testController::class,'index'] );

