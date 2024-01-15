<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use LDAP\Result;

class ContatoController extends Controller
{
    public function contato(Request $request){
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // echo $request->input('nome');
        // echo '<br>';
        // echo $request->input('email');

        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');
        // $contato->save();

        // $contato = new SiteContato();
        // $contato->create($request->all());
        // $contato->save();


        // print_r($contato->getAttributes());
        
        return view('site.contato', ['título' => 'Contato (teste)']); 
    }
    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        // SiteContato::create($request->all());
    }
}
