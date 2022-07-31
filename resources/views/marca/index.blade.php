@extends('layout.site')

@section('titulo','Cadastro de Marca')

@section('head')
    <!-- Styles -->
    {{-- <link href="{{ asset('../css/marca/index.css') }}" rel="stylesheet"> --}}
        <!-- Scripts -->
        <script src=" {{ asset('js/marca/index.js') }} "></script>
@endsection

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
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
    @foreach($marcas as $marca)
                <tr>
                    <td>{{ $marca->name }}</td>
                    <td>{{ $marca->nascimento }}</td>
                    <td>{{ $marca->nacionalidade }}</td>
                    <td>
                        <a href="{{$marca->id}}/edit" class="btn btn-info m-1"><i class="fas fa-edit"></i></a>
                        <form action="delete/{{ $marca->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger m-1"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                    </i>
                </tr>
    @endforeach
                </tbody>
            </table>
        </div>
@endsection
