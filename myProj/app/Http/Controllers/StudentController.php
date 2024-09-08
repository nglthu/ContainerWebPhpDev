<?php

namespace App\Http\Controllers;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index(){
      //  $studentName = $_REQUEST["studentName"];
      //  echo "hello $studentName";
        return view('webNC03');

    }
   

}
