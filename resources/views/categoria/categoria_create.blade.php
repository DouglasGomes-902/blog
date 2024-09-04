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

            <form method = 'POST' action="{{URl('/categoria') }}">
            @csrf  

            <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
            <input type="text" name="nome" class="form-control"  placeholder="Create here">
                    
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>

            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



