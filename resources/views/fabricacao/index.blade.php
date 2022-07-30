@extends('layout.site')

@section('titulo','Fabricação de Automóveis')

@section('conteudo')

    <h1 class="text-center">Exibição de Automóvel</h1>
    <div class="container">
        <div class="d-flex justify-content-end">
            <a type="button" class="btn btn-outline-primary mb-3 " href="{{ url('fabricacao/create') }}">Criar nova marca</a>
        </div>
    </div>

@endsection
