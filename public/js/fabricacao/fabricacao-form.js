$(document).ready(function () {

    $('.select2').select2();
    $('.litragem').mask('00.0', {reverse: true});

    $(".portas").prop({
        "max": 4,
        "min": 1
    });


    $("input").prop('required', true);

    //$(".selecao_marca").hide();
    //$(".selecao_detalhes").hide();

    var name = $('.name');

    $form = $("#form-fabricacao");



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

});
