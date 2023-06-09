<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request ) {
        /*
        var_dump($_POST);*/
        $contato = new SiteContato();
        /*
        $contato->nome = $request->input( 'nome');
        $contato->telefone = $request->input( 'telefone');
        $contato->email = $request->input( 'email');
        $contato->motivo_contato = $request->input( 'motivo_contato');
        $contato->mensagem = $request->input( 'mensagem'); 
        Determinar cada input do formulario*/
        $contato->fill($request->all());
        $contato->save();
        
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
