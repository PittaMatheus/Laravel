<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Curso;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        return view('home', compact('cursos'));
    }
}
