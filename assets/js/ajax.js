function ajax(id, tipo, controller) {
    $.ajax({
        data: '',
        type: 'GET',
        url: base + controller + id,
        async: true,
        success: function(json) {
            if (tipo == 1) {
                modal_editar(json);
            } else {
                modal_detalhes(json);
            }
        },
        error: function() {
            toastr['error']('Algo deu errado, tente novamente mais tarde ou contate-nos');
        },
        dataType: 'json'
    });
}