@extends('layout.site')

@section('titulo','Cadastro de Marca')s

@section('conteudo')

    <form class="d-flex justify-content-center">
        <div class="form-group m-1">
            <label for="name">Nome da Marca</label>
            <input type="text" class="form-control" id="name" placeholder="Marca">
        </div>
        <div class="form-group m-1">
            <label for="nascimento">Data de Nascimento da Marca</label>
            <input type="date" class="form-control" id="nascimento" placeholder="Marca">
        </div>
        <div class="form-group m-1">
            <label for="nacionalidade">Nacionalidade da Marca</label>
            <input type="text" class="form-control" id="nacionalidade" placeholder="Marca">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
