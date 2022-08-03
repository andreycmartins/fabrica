$(document).ready(function () {

    $('.select2').select2();
    $('.litragem').mask('00.0', {reverse: true});

    $(".portas").prop({
        "max": 4,
        "min": 1
    });


    $("input").prop('required', true);


    var name = $('.name');

    $form = $("#form-fabricacao");

    $(".selecao_marca").change(function(){

    });

    $("#submit").click(function(){
        if (name.val() == '') {
            Swal.fire({
                icon: 'error',
                title: 'Vish...',
                text: 'Preencha todos os campos',
            });
        }
        else{
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Carro fabricado com sucesso!',
                showConfirmButton: false,
                timer: 3000
            })
        }
    });

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
