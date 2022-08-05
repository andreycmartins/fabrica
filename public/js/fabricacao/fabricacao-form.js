$(document).ready(function () {

    $('.select2').select2();
    $('.litragem').mask('00.0', {reverse: true});

    var name = $('.name');
    var portas = $('.portas');
    var litragem = $('.litragem');
    var cor = $('.cor');

    $form = $("#form-fabricacao");

    $form.validate({
        rules: {
            name: {
                required: true,
            },
            portas: {
                required: true,
                min: 1,
                max: 4,
            },
            litragem: {
                required: true
            },
            cor: {
                required: true
            },
        },
        messages: {
            name: {
                required: 'Informe o nome do veículo',
            },
            portas: {
                required: 'Informe a quantidade de portas do veículo',
                min: 'O carro deve ter pelo menos 1 porta',
                max: 'O carro não pode ter mais de 4 portas'
            },
            litragem: {
                required: 'Informe a litragem do motor'
            },
            cor: {
                required: 'Informe a cor do veículo'
            },
        },
    });

    //sistema de páginas invisíveis
    $(".selecao_detalhes").hide();

    $(".proxima_pagina").click(function(){
    $(".selecao_marca").hide("slow");
        $(".selecao_detalhes").show("slow");
    });

    $(".pagina_anterior").click(function(){
        $(".selecao_marca").show("slow");
        $(".selecao_detalhes").hide("slow");
    });

});
