<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentAdd extends Controller
{
    //
    public function index(){
        $student = Student::all();
        return view('webNC03', compact('student'));
       // return view('webNC03');

    }
    public function create(){

    }
    public function save(Request $req){

    }
    public function display($id){

    }
    public function edit(){

    }
    public function update(Request $req, $id){

    }
    public function delete($id){

    }
}
