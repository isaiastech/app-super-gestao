<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required|max:2000'
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'mensagem.required' => 'O campo mensagem é obrigatório.',
            'mensagem.max' => 'O campo mensagem deve ter no máximo 2000 caracteres.'
        ]);

        Contato::create($request->all());

        return redirect()->back()->with('success', 'Contato enviado com sucesso!');
    }
}
