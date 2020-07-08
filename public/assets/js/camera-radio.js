$(document).ready(() => {
    $(".um").click(() => {

        $('.camera').attr("src", "http://www.nethorizontes.com.br/flashmediaserver/grooveip01/");

        $('.nome_camera').html('ALTO DAS BRAUNES');

        $('.um').css("opacity", "1");
        $('.dois').css("opacity", "0.5");
    });

    $(".dois").click(() => {

        $('.camera').attr("src", "http://www.nethorizontes.com.br/flashmediaserver/grooveip02/");
        $('.nome_camera').html('PICO DA CALEDÔNIA');

        $('.dois').css("opacity", "1");
        $('.um').css("opacity", "0.5");
    });

    setInterval(refreshIframe, 50000);

    function refreshIframe() {
        var frame = document.getElementById("estacao");
        frame.src = frame.src;
    }
});

if ($(window).width() < 768) {
    $('.radio-desktop').remove();
} else {
    $('.radio-mobile').remove();
}