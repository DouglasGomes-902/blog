@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <a href="{{url('/categoria/create')}}"><button>Create</button></a>
             
                @if (session('mensagem'))
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                    </div>
                @endif

                <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
                
            </tr>
                    @foreach($categorias as $value)
            <tr>
                <td>{{$value->id}}</td> 
                <td>{{$value->nome}}</td>   
                <td>
                    <a href="{{url('/categoria/' . $value->id)}}"><button>Visualizar</button></a>
                    <a href="{{url('/categoria/' . $value->id . '/edit' )}}"><button>Editar</button></a>
                    
                    <form method = 'POST' action="{{ URL('/categoria/' . $value->id)}}">
                    @method('DELETE')
                    @csrf  
                    <button type="submit">delete</button>

                    </form>

                </td>
            </tr>
        
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



