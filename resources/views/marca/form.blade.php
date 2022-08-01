@extends('layout.site')

@section('titulo','Cadastro de Marca')

@section('head')
    <!-- Styles -->
    {{-- <link href="{{ asset('../css/marca/index.css') }}" rel="stylesheet"> --}}
    <!-- Scripts -->
    <script src=" {{ asset('js/marca/marca-form.js') }} "></script>
@endsection

@section('conteudo')

    @if(session('mensagem'))
        <div class="alert alert-success">
            <p>{{session('mensagem')}}</p>
        </div>'
    @endif

    @if ( Request::is('*/edit') )
        <form class="d-flex justify-content-center" action="{{ url('marca/update') }}/{{ $marcas->id }}" method="POST">
            @csrf
            <div class="form-group m-3">
                <label for="name">Nome da Marca</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nome"
                       value="{{ $marcas->name }}">
            </div>
            <div class="form-group m-3">
                <label for="nascimento">Data de Nascimento da Marca</label>
                <input type="date" class="form-control date" name="nascimento" id="date" placeholder="Nascimento"
                       value="{{ $marcas->nascimento }}">
            </div>
            <div class="form-group m-3">
                <label for="nacionalidade">Nacionalidade da Marca</label>
                <input type="text" class="form-control" name="nacionalidade" id="nacionalidade"
                       placeholder="Nacionalidade" value="{{ $marcas->nacionalidade }}">
            </div>
            <div class="form-group m-3">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </form>

    @else
        <form class="d-flex justify-content-center" action="{{ url('marca/save') }}" method="POST">
            @csrf
            <div class="form-group m-3">
                <label for="name">Nome da Marca</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
            </div>
            <div class="form-group m-3">
                <label for="nascimento">Data de Nascimento da Marca</label>
                <input type="date" class="form-control date" data-mask="00/00/0000" name="nascimento" id="date" id="nascimento"
                       placeholder="Nascimento">
            </div>
            <div class="form-group m-3">
                <label for="nacionalidade">Nacionalidade da Marca</label>
                <input type="text" class="form-control" name="nacionalidade" id="nacionalidade"
                       placeholder="Nacionalidade">
            </div>
            <div class="form-group m-3">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>

        </form>
    @endif
@endsection
