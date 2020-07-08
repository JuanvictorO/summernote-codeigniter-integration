$(document).ready(() => {


    $("#email").on("click", () => {
        $("#recaptcha_ns").show(300);
    });
});

$('#form_newsletter').submit(e => {

    e.preventDefault();
    var formulario = $(this);
    var retorno = inserirFormulario(formulario);

});

function inserirFormulario(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "<?php echo base_url(); ?>home/enviar",
        async: true
    }).then(sucesso, falha);

    $('#enviando').show();
    $("#recaptcha_ns").slideUp(300);

    function sucesso(data) {

        $('#enviando').hide();
        $('#mensagem').show();

        setTimeout(() => {
            $('#mensagem').hide();

            jQuery("input[name='email']").val('');
        }, 2500);

    }

    function falha() {

        $('#enviando').hide();
        $('#mensagem-erro').show();
        setTimeout(() => {
            $('#mensagem-erro').hide();
            jQuery("input[name='email']").val('');
        }, 2500);

    }
}
window.onload = () => {
    var recaptcha = document.forms["form_newsletter"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = e => {
        // fazer algo, no caso to dando um alert
        alert("Por favor complete o captcha.");
    }
}