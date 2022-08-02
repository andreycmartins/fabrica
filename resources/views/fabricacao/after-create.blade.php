@extends('layout.site')

@section('titulo','Carro Fabricado!')

@section('head')
    <!-- Styles -->
    {{--<link href="{{ asset('css/fabricacao/after-create.css') }}" rel="stylesheet">--}}
    <!-- Scripts -->
    <script src=" {{ asset('js/fabricacao/after-create.js') }} "></script>
@endsection

@section('conteudo')

    <h1 class="text-center">Carro criado</h1>
    <div class="d-flex justify-content-center">
        <ul class="list-group">
            <li class="list-group-item active text-center">Nome: {{$fabricacao->name}}</li>
            <li class="list-group-item">Portas: {{$fabricacao->portas}}</li>
            <li class="list-group-item">Litragem: {{$fabricacao->litragem}}</li>
            <li class="list-group-item">Tipo do veículo: {{$fabricacao->tipo_veiculo}}</li>
            <li class="list-group-item">Tipo do motor: {{$fabricacao->tipo_motor}}</li>
            <li class="list-group-item">Tipo de rodas: {{$fabricacao->tipo_rodas}}</li>
            <li class="list-group-item">Tipo de cor: {{$fabricacao->cor}}</li>
            <li class="list-group-item">Tipo de chassi: {{$fabricacao->chassi}}</li>
        </ul>
    </div>

@endsection
