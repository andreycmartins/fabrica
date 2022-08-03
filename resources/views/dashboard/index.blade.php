@extends('layout.site')

@section('titulo','Dashboard')

@section('conteudo')

    <h1 class="text-center">Dashboard</h1>

<div class="container d-flex justify-content-center">
    <div class="row">

        <div class="card m-1 d-flex" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/cadastro.jpg')}}" alt="Card image cap">
            <div class="card-body"
                <h5 class="card-title">Cadastro de Marcas</h5>
                <a href="{{url('marca/create')}}" class="btn btn-primary">Cadastrar novas marcas</a>
            </div>
        </div>

        <div class="card m-1" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/fabricacao.png')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Fabricação de Automóveis</h5>
                <a href="{{url('fabricacao/create')}}" class="btn btn-primary">Fabricar novos automóveis</a>
            </div>
        </div>

        <div class="card m-1" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/fabricados.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Automóveis Fabricados</h5>
                <a href="{{url('fabricacao/index')}}" class="btn btn-primary">Ver automóveis fabricados</a>
            </div>
        </div>

    </div>

</div>


@endsection
