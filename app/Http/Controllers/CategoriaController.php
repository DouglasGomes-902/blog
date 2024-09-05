<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.categoria_index', compact('categorias'));
        //dd($categorias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.categoria_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|min:5',
         ]);

         //mvc  
        $categoria = new Categoria();
        $categoria -> nome = $request -> nome;
        $categoria -> save();

        //dd($request->all());

         return redirect()->route('categoria.index')-> with('mensagem','categoria registrada com sucesso !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd('show: '.$id);
        $categoria = Categoria::find($id);
        return view('categoria.categoria_show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $categorias = Categoria::find($id);
        return view('categoria.categoria_edit', compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome' => 'required|min:5',
        ]);

        $categorias = Categoria::find($id);
        $categorias -> nome = $request -> nome;
        $categorias -> save();

        return redirect() -> route('categoria.index') -> with('mensagem', 'Categoria alterado com sucesso !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorias = Categoria::find($id);
        $categorias -> delete();

        return redirect() -> route('categoria.index') -> with('mensagem', 'Categoria deletada com sucesso !');
    }
}
