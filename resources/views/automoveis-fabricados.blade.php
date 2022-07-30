@extends('layout.site')

@section('titulo','Automóveis Fabricados')

@section('conteudo')

    <h1 class="text-center">Automoveis Fabricados</h1>


    <div class="container col-sm-8">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            </tbody>
        </table>
    </div>


@endsection
