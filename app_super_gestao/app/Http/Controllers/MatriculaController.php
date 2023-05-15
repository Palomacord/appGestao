<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
class MatriculaController extends Controller
{
    public function matricula(Request $request ) {
        $contato = new Matricula();
        $contato->fill($request->all());
        $contato->save();
        return view('site.matricula', ['titulo' => 'Matricula alunos']);
    }

    public function listaMatricula( ) {
        $curso = '';
        $matriculas = Matricula::paginate(10);
        return view('site.listaMatriculas', ['matriculas'=> $matriculas,'classe' =>'form-label','curso'=>$curso],);
    }
}
