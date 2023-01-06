<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Welcome to courses page";
    }

    public function create(){
        return "In this page you can create a course";
    }

    public function show($curso){
        return "Bienvenido al curso de: $curso";
    }
}
