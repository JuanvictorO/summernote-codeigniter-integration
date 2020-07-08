$(document).ready(() => {

    if (window.location.href.indexOf('#cadastro') != -1) {
        $('#cadastro').modal('show');
    }

});

var expanded = false;

function showCheckboxes() {
    var checkboxes = $("#checkboxes");
    if (!expanded) {
        checkboxes.slideDown();
        expanded = true;
    } else {
        checkboxes.slideUp();
        expanded = false;
    }
}

$("#cadastro_submit").click(() => {
    if ($('input[name="musica[]"]:checked').length < 2) {
        $("#musicas_aviso").addClass("text-uppercase bold");
        var checkboxes = $("#checkboxes");
        checkboxes.slideDown();

        return false;
    }
});

$("input:checkbox").click(() => {
    if ($('input[name="musica[]"]:checked').length > 2) {
        return false;
    }
});

if ($(window).width() <= 430) {
    $("#cadastro_submit").attr("value", "Concluir cadastro");
}

if ($(window).width() <= 519) {
    $("#genero2").css("display", "none");
    $("#genero1").css("display", "inline");
    $("#male1").attr("style", "font-size:16px !important; font-weight: 400; padding-top: 2px;");
    $("#female1").attr("style", "font-size:16px !important; font-weight: 400; padding-top: 2px;;");
    $("#other1").attr("style", "font-size:16px !important; font-weight: 400; padding-top: 2px;");
    $(".custom-radio").removeClass("pl-4");
    $(".custom-radio").addClass("mr-0");
    $("#div-radio").addClass("ml-0");
    $("#div-radio").removeClass("mt-2");
    $("#div-radio").attr("style", "margin-top: -14px !important;");
    $(".modal-title").attr("style", "font-size: 1.28em !important; line-height: 100px;");
} else {
    $("#genero1").css("display", "none");
    $("#genero2").css("display", "inline");
}