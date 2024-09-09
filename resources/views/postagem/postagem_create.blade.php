@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

            <form method = 'POST' action="{{URl('/postagem') }}">
            @csrf  

            <label for="cars">Escolha uma categoria</label>

                <select name="categoria_id" class="form-control" id="cars">
                    @foreach ($categorias as $value)
                        <option value="{{$value -> id}}">{{ $value -> nome}}</option>
                    @endforeach    
                </select>

            <div class="form-group">
        <label for="exampleInputEmail1">Titulo</label>
            <input type="text" name="titulo" class="form-control"  placeholder="Create here">

            <label for="exampleInputEmail1">Conteudo</label>
            <textarea name="conteudo" id="conteudo" class="form-control" rows="4" cols="50"></textarea>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>

            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



