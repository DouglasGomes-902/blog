@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            <form method = 'POST' action="{{URl('/postagem/' . $postagens->id) }}">
                 @method('PUT')
                 @csrf  

                 <label for="cars">Escolha uma categoria</label>

                <select name="categoria_id" class="form-control" id="cars">
                    @foreach ($categorias as $value)

                        @if($value-> id == $postagens -> categoria_id)
                                <option selected ="selected" value="{{$value -> id}}">{{ $value -> nome}}</option>
                        @else
                                <option value="{{$value -> id}}">{{ $value -> nome}}</option>
                        @endif

                    @endforeach    
                </select>

            <div class="form-group">             
            <label for="exampleInputEmail1">Titulo</label>
            <input type="text" name="titulo" value="{{$postagens -> titulo}}" class="form-control"  placeholder="Create here">

            <label for="exampleInputEmail1">Conteudo</label>
            <textarea name="conteudo" id="conteudo" class="form-control" rows="4" cols="50">{{ $postagens -> conteudo}}</textarea>
                
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



