<?php

namespace App\Http\Controllers;

use App\Models\Relatorio;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function index()
    {
        $relatorios = Relatorio::all();
        return view('relatorios.index', compact('relatorios'));
    }

    public function create()
    {
        return view('relatorios.create');
    }

    public function store(Request $request)
    {
        $relatorio = Relatorio::create($request->all());
        return redirect()->back()->with('success', 'Relatório criado com sucesso.');
    }

    // public function show(Relatorio $relatorio)
    // {
    //     return view('relatorios.show', compact('relatorio'));
    // }

    // public function edit(Relatorio $relatorio)
    // {
    //     return view('relatorios.edit', compact('relatorio'));
    // }

    // public function update(Request $request, Relatorio $relatorio)
    // {
    //     $relatorio->update($request->all());
    //     return redirect()->route('relatorios.index')->with('success', 'Relatório atualizado com sucesso.');
    // }

    // public function destroy(Relatorio $relatorio)
    // {
    //     $relatorio->delete();
    //     return redirect()->route('relatorios.index')->with('success', 'Relatório excluído com sucesso.');
    // }
}
