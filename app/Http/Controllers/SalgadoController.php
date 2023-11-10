<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalgadoController extends Controller
{
public function index()
{
    $salgados = Salgado::all();
    return view('salgados.index', compact('salgados'));
}

public function create()
{
    return view('salgados.create');
}

public function store(Request $request)
{
    $salgado = new Salgado;
    $salgado->nome = $request->input('nome');
    $salgado->descricao = $request->input('descricao');
    $salgado->preco = $request->input('preco');
    $salgado->save();

    return redirect()->route('salgados.index');
}

public function destroy($id)
{
    $salgado = Salgado::findOrFail($id);
    $salgado->delete();

    return redirect()->route('salgados.index');
}
}
