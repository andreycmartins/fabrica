@extends('layout.site')

@section('titulo','Login')

@section('conteudo')

    <h1 class="text-center">Login</h1>

    <div class="form">
        <form>
            <div class="form-group col-sm-3">
                <label for="login">Login</label>
                <input type="login" class="form-control" id="login" aria-describedby="loginHelp" placeholder="Enter login">
            </div>
            <div class="form-group col-sm-3">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
