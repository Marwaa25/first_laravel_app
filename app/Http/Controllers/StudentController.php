<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __invoke()
    {
     return ("c'est la méthode par defaut");
    }
    
    public function index() {
        return view('students.index',['name'=>'ismo','type'=>'stagiaire']);
    }
}
