@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <a href="{{url('/postagem/create')}}"><button>Create</button></a>
             
                @if (session('mensagem'))
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                    </div>
                @endif

                <script class="alert alert-success">
                            function ConfirmDelet(){
                                return confirm('Tem certeza que queres excluir o registro ? ');
                            }

                    </script>

                <table>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Titulo</th>
                <th>Ações</th>
                
            </tr>
                    @foreach($postagens as $value)
            <tr>
                <td>{{$value->id}}</td> 
                <td>{{$value->categoria->nome}}</td>   
                <td>{{$value->titulo}}</td>   
                <td>
                    <a href="{{url('/postagem/' . $value->id)}}"><button>Visualizar</button></a>
                    <a href="{{url('/postagem/' . $value->id . '/edit' )}}"><button>Editar</button></a>
                    
                    <form method = 'POST' action="{{ URL('/postagem/' . $value->id)}}" onsubmit = 'return ConfirmDelet()'>
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



