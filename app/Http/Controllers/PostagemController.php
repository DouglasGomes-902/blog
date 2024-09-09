<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\postagem;
use Illuminate\Support\Facades\Auth;

class postagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = postagem::all();
        return view('postagem.postagem_index', compact('postagens'));
        //dd($postagens);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('postagem.postagem_create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',
         ]);

         //mvc  
        $postagens = new postagem();
        $postagens -> categoria_id = $request -> categoria_id;
        $postagens -> user_id = Auth::id();
        $postagens -> titulo = $request -> titulo;
        $postagens -> conteudo = $request -> conteudo;
        $postagens -> save();

        //dd($request->all());

         return redirect()->route('postagem.index')-> with('mensagem','postagem registrada com sucesso !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd('show: '.$id);
        $postagens = postagem::find($id);
        return view('postagem.postagem_show', compact('postagens'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $postagens = postagem::find($id);
        return view('postagem.postagem_edit', compact('postagens', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',
        ]);

        $postagens = postagem::find($id);
        $postagens -> categoria_id = $request -> categoria_id;
        $postagens -> user_id = Auth::id();
        $postagens -> titulo = $request -> titulo;
        $postagens -> conteudo = $request -> conteudo;
        $postagens -> save();

        return redirect() -> route('postagem.index') -> with('mensagem', 'postagem alterado com sucesso !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagens = postagem::find($id);
        $postagens -> delete();

        return redirect() -> route('postagem.index') -> with('mensagem', 'postagem deletada com sucesso !');
    }
}
