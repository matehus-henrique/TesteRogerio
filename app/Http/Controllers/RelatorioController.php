<?php

namespace App\Http\Controllers;

use App\Models\Relatorio;
use App\Models\RelatorioRelacao;
use App\Models\Perfil;
use Illuminate\Http\Request;

use PDF;

use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    public function index()
    {
        $relatorios = Relatorio::all();
        return view('relatorios.index', compact('relatorios'));
    }

    public function create()
    {
        $data['perfil'] = Perfil::all(); 
        return view('relatorios.create',$data);

    }

    public function store(Request $request)
    {
        // array para salvar os dados do form
        $dataForm = array(
            'descricao' => $request->post("descricao"),
            'titulo'    => $request->post("titulo"),
        );
        Relatorio::create($dataForm);
        $last_id = Relatorio::all()->last();
        $dataRelacao = array(
            'perfil_id'        => $request->post("id_perfil"),
            'relatorio_id'     => $last_id->id
        );
        RelatorioRelacao::create($dataRelacao);
        return redirect()->back()->with('success', 'Relatório criado com sucesso.');
    }

    public function pdf()
    {

    }
    public function show($id)
{
    $data['relatorio'] = Relatorio::find($id); 

    // if (empty($relatorio)) {
    //     return redirect()->back()->with('error', 'Relatório não encontrado.');
    // }

    return view('relatorios.show',$data);
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
