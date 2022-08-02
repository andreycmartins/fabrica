@extends('layout.site')

@section('titulo','Fabricação de Automóveis')

@section('conteudo')

    <h1 class="text-center">Exibição de Automóvel</h1>
    <div class="container">
        <div class="d-flex justify-content-end">
            <a type="button" class="btn btn-outline-primary mb-3 " href="{{ url('fabricacao/create') }}">Criar nova marca</a>
        </div>
    </div>
    <div class="container">
    @foreach($fabricacao as $fabri)
    <div class="card d-flex justify-content-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$fabri->name}}</h5>
            <p class="card-text">{{$fabri->chassi}}</p>
            <a href="#" class="btn btn-primary">Visitar</a>
        </div>
    </div>
    @endforeach
    </div>

@endsection
