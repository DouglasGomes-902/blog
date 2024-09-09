@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <p><strong>Categoria: </strong>{{$postagens->categoria->nome}}</p>
                <p><strong>titulo: </strong>{{$postagens->titulo}}</p>  
                <p><strong>conteudo: </strong>{{$postagens->conteudo}}</p>
                <p><strong>autor: </strong>{{$postagens->autor->name}}</p> 
                <p><strong>Crianção: </strong>{{$postagens-> created_at}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



