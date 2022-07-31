@extends('layout.site')

@section('titulo','Fabricação de Automóveis')

@section('conteudo')
    <h1 class="text-center">Fabricação de Automóvel</h1><br><br>
    <h4 class="text-center">Qual marca de automóvel deseja criar?</h4>
    <form class="d-flex justify-content-center" action="{{ url('fabricacao/save') }}" method="POST">
        @csrf
        <div class="form-group m-3">
            <label for="name">Nome do veículo</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
        </div>
        <div class="form-group m-3">
            <label for="tipo_veiculo">Tipo do veículo</label>
            <select class="form-control js-example-basic-single" type="text" class="form-control" name="tipo_veiculo" id="tipo_veiculo"
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
        <div class="form-group m-3">
            <label for="portas">Quantidade de portas</label>
            <input type="text" class="form-control" name="portas" id="portas" placeholder="Quantida de portas">
        </div>
        <div class="form-group m-3">
            <label for="litragem">Litragem do motor</label>
            <input type="text" class="form-control" name="litragem" id="litragem" placeholder="Litragem do motor">
        </div>
        <div class="form-group m-3">
            <label for="tipo_motor">Tipo do motor</label>
            <input type="text" class="form-control" name="tipo_motor" id="tipo_motor" placeholder="Tipo do motor">
        </div>
        <div class="form-group m-3">
            <label for="tipo_rodas">Tipo de rodas</label>
            <input type="text" class="form-control" name="tipo_rodas" id="tipo_rodas" placeholder="Tipo de rodas">
        </div>
        <div class="form-group m-3">
            <label for="cor">Cor do veículo</label>
            <input type="text" class="form-control" name="cor" id="cor" placeholder="Cor">
        </div>
        <div class="form-group m-3">
            <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
    </form>

@endsection
