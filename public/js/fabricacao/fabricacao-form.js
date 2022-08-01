$(document).ready(function () {

    $('.select2').select2();
    $('.litragem').mask('00.0', {reverse: true});

    $(".portas").prop({
        "max": 4,
        "min": 1
    });

    $("input").prop('required', true);

    $(".selecao_marca").hide();
    //$(".selecao_detalhes").hide();

    Swal.fire({
        icon: 'error',
        title: 'Vish...',
        text: 'Preencha todos os campos',
    });

    const isRequired = value => value === '' ? false : true;

});
