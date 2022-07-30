@extends('layout.site')

@section('titulo','Dashboard')

@section('conteudo')

    <h1 class="text-center">Dashboard</h1>

<div class="container d-flex justify-content-center">
    <div class="row">

        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title">Cadastro de Marcas</h5>
                <a href="{{URL::to('cadastro-marca')}}" class="btn btn-primary">Cadastrar novas marcas</a>
            </div>
        </div>

        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title">Fabricação de Automóveis</h5>
                <a href="{{URL::to('fabricacao-automovel')}}" class="btn btn-primary">Fabricar novos automóveis</a>
            </div>
        </div>

        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title">Automóveis Fabricados</h5>
                <a href="{{URL::to('automoveis-fabricados')}}"" class="btn btn-primary">Ver automóveis fabricados</a>
            </div>
        </div>
    </div>

</div>


@endsection
