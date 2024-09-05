@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            <form method = 'POST' action="{{URl('/categoria/' . $categorias->id) }}">
                 @method('PUT')
                 @csrf  

            <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
            <input type="text" name="nome" value="{{$categorias -> nome}}" class="form-control"  placeholder="Create here">
                    
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



