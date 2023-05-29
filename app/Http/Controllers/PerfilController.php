<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        $perfis = Perfil::all();
        return view('perfis.index', compact('perfis'));
    }

    public function create()
    {
        return view('perfis.create');
    }

    public function store(Request $request)
    {
        $perfil = new Perfil;
        $perfil->nome = $request->nome;
        $perfil->sobrenome = $request->sobrenome;
        $perfil->dbo = $request->dbo;
        $perfil->genero = $request->genero;
        $perfil->save();
        return redirect()->back()->with('success', 'Relatório criado com sucesso.');
    }

    public function show(Perfil $perfil)
    {
        return view('perfis.show', compact('perfil'));
    }

    public function edit(Perfil $perfil)
    {
        return view('perfis.edit', compact('perfil'));
    }

    public function update(Request $request, Perfil $perfil)
    {
        $perfil->nome = $request->nome;
        $perfil->sobrenome = $request->sobrenome;
        $perfil->dbo = $request->dbo;
        $perfil->genero = $request->genero;
        $perfil->save();
    
        return redirect()->back()->with('alterado com ');
    }
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();

        return redirect('/perfis');
    }
}
