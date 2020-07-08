$(document).ready(() => {

    const base = $('#base_url').val();

    var limit = 8;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit) {
        var output = '';
        for (var count = 0; count < limit; count++) {
            output += '<div class="post_data">';
            output += '<p><span class="col-lg-12 content-placeholder">&nbsp;</span></p>';
            output += '<p><span class="col-lg-12 content-placeholder">&nbsp;</span></p>';
            output += '</div>';
        }
        $('#load_data_message').html(output);
    }

    lazzy_loader(limit);

    function load_data(limit, start) {
        $.ajax({
            url: base + "/news/fetch",
            method: "POST",
            data: {
                limit: limit,
                start: start
            },
            cache: false,
            success: data => {
                console.log(data);
                if (data == '') {
                    $('#load_data_message').html('<h3>Não foram encontrados mais resultados</h3>');
                    action = 'active';
                } else {
                    $('#load_data').append(data);
                    $('#load_data_message').html("");
                    action = 'inactive';
                }
            },
            error: data => {
                console.log(data);
            }
        })
    }
    // /2 abaixo para carregar mais estando na metade da página
    if (action == 'inactive') {
        action = 'active';
        load_data(limit, start);
    }

    $('#ver-mais').click(() => {
        lazzy_loader(limit);
        action = 'active';
        start = start + limit;
        setTimeout(() => {
            load_data(limit, start);
        }, 1000);
    });
});