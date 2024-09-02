@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <table>
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
                    @foreach($categorias as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->nome}}</td>
            </tr>
        
                    @endforeach
                </table>
                
            </div>
        </div>
    </div>
</div>
@endsection



