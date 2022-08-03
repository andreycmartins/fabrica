@extends('layout.site')

@section('titulo','Fabricação de Automóveis')

@section('conteudo')

    <h1 class="text-center">Exibição de Automóvel</h1>
    <div class="container">
        <div class="d-flex justify-content-end">
            <a type="button" class="btn btn-outline-primary mb-3 " href="{{ url('fabricacao/create') }}">Fabricar novo carro</a>
        </div>
    </div>
    <div class="container">

            <table class="table table-dark">
                <thead>

                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Chassi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fabricacao as $fabri)
                <tr>
                    <th>{{$fabri->name}}</th>
                    <td>{{$fabri->chassi}}</td>
                </tr>
            @endforeach
                </tbody>
            </table>

    </div>

@endsection
