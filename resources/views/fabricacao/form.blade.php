@extends('layout.site')

@section('titulo','Fabricação de Automóveis')

@section('head')
    <!-- Styles -->
    <link href="{{ asset('css/fabricacao/fabricacao.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src=" {{ asset('js/fabricacao/fabricacao-form.js') }} "></script>
@endsection

@section('conteudo')
    <h1 class="text-center">Fabricação de Automóvel</h1><br><br>
    <h4 class="text-center">Qual marca de automóvel deseja criar?</h4>
    <form class="d-flex justify-content-center" id="form-fabricacao" action="{{ url('fabricacao/save') }}" method="POST">
        @csrf
        <div class="selecao_marca">
        @foreach($marcas as $marca)
        <div class="container d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $marca->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nascida em: {{ date("d/m/Y", strtotime($marca->nascimento)) }}</li>
                    <li class="list-group-item">Nacionalidade: {{$marca->nacionalidade}}</li>
                </ul><br><br>
                <div class="card-body">
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Selecionar</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>

        {{--
        criação da marca
        --}}
        <div class="container selecao_detalhes">
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="name">Nome do veículo</label>
                    <input type="text" class="form-control name" name="name" id="name" placeholder="Nome">
                </div>
                <div class="form-group col-lg-3">
                    <label for="portas">Quantidade de portas</label>
                    <input type="number" class="form-control portas" name="portas" id="portas"
                           placeholder="Número de portas">
                </div>
                <div class="form-group col-lg-3">
                    <label for="litragem">Litragem do motor</label>
                    <input type="text" class="form-control litragem" name="litragem" id="litragem"
                           placeholder="Litragem do motor">
                </div>
                <div class="form-group col-lg-3">
                    <label for="cor">Cor do veículo</label>
                    <input type="text" class="form-control cor" name="cor" id="cor" placeholder="Cor">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-4"><br>
                    <label for="tipo_motor">Tipo de motor</label>
                    <select class="form-control select2" type="text" name="tipo_motor" id="tipo_motor"
                            placeholder="Tipo de motor">
                        <option value="Aspirado">Aspirado</option>
                        <option value="Turbo">Turbo</option>
                    </select>
                </div>
                <div class="form-group col-lg-4 align-self-end">
                    <label for="tipo_veiculo">Tipo do veículo</label><br>
                    <select class="form-control select2" type="text" name="tipo_veiculo" id="tipo_veiculo"
                            placeholder="Tipo do veículo">>
                        <option value="Hatch">Hatch</option>
                        <option value="Sedan">Sedan</option>
                        <option value="SUV">SUV</option>
                        <option value="Coupe">Coupe</option>
                        <option value="Minivan">Minivan</option>
                        <option value="Conversível">Conversível</option>
                        <option value="Pickup">Pickup</option>
                        <option value="Wagon">Wagon</option>
                        <option value="Van">Van</option>
                    </select>
                </div>
                <div class="form-group col-lg-4"><br>
                    <label for="tipo_rodas">Tipo de rodas</label>
                    <select class="form-control select2" type="text" name="tipo_rodas" id="tipo_rodas"
                            placeholder="Tipo de rodas">
                        <option value="Ferro">Ferro</option>
                        <option value="Liga-Leve">Liga-Leve</option>
                    </select>
                </div>
            </div>{{--endrow--}}
            <button type="submit" class="btn btn-primary form-control" id="submit" onclick="verificaFormulario()">Submit</button>
        </div>
    </form>

@endsection
