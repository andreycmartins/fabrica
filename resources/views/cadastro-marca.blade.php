@extends('layout.site')

@section('titulo','Cadastro de Marca')

@section('conteudo')

    <h1 class="text-center">Cadastro de Marca</h1>
    @foreach($marcas as $marca)

        <div class="container col-sm-8">
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Nascimento da Marca</th>
                    <th scope="col">Nacionalidade</th>
                    <th scope="col">#</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$marca->name}}</td>
                    <td>{{$marca->nascimento}}</td>
                    <td>{{$marca->nacionalidade}}</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    @endforeach

@endsection
