@extends('layout.site')

@section('titulo','Cadastro de Marca')

@section('conteudo')

    @if(session('mensagem'))
        <div class="alert alert-success">
            <p>{{session('mensagem')}}</p>
        </div>
    @endif

    @if ( Request::is('*/edit') )
    <form class="d-flex justify-content-center" action="{{ url('marca/update') }}/{{ $marcas->id }}" method="POST">
        @csrf
        <div class="form-group m-1">
            <label for="name">Nome da Marca</label>
            <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ $marcas->name }}">
        </div>
        <div class="form-group m-1">
            <label for="nascimento">Data de Nascimento da Marca</label>
            <input type="date" class="form-control" name="nascimento" placeholder="Nascimento" value="{{ $marcas->nascimento }}">
        </div>
        <div class="form-group m-1">
            <label for="nacionalidade">Nacionalidade da Marca</label>
            <input type="text" class="form-control" name="nacionalidade" placeholder="Nacionalidade" value="{{ $marcas->nacionalidade }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @else
    <form class="d-flex justify-content-center" action="{{ url('marca/save') }}" method="POST">
        @csrf
        <div class="form-group m-1">
            <label for="name">Nome da Marca</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
        </div>
        <div class="form-group m-1">
            <label for="nascimento">Data de Nascimento da Marca</label>
            <input type="date" class="form-control" name="nascimento" id="nascimento" placeholder="Nascimento">
        </div>
        <div class="form-group m-1">
            <label for="nacionalidade">Nacionalidade da Marca</label>
            <input type="text" class="form-control" name="nacionalidade" id="nacionalidade" placeholder="Nacionalidade">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endif
@endsection
