@extends('layout.site')

@section('titulo','Cadastro de Marca')

@section('conteudo')

    <h1 class="text-center">Cadastro de Marca</h1>


        <div class="container col-sm-8">
            <table class="table table-striped table-bordered table-dark">
                <div class="d-flex justify-content-end">
                    <a type="button" class="btn btn-outline-primary mb-3 " href="{{ url('marca/create') }}">Criar nova marca</a>
                </div>

                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Nascimento da Marca</th>
                    <th scope="col">Nacionalidade</th>
                </tr>
                </thead>
                <tbody>
    @foreach($marcas as $marca)
                <tr>
                    <td>{{ $marca->name }}</td>
                    <td>{{ $marca->nascimento }}</td>
                    <td>{{ $marca->nacionalidade }}</td>
                </tr>
    @endforeach
                </tbody>
            </table>
        </div>


@endsection
