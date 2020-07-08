$("#conteudoD").summernote("disable");

function excluir(id) {
  $.confirm({
    title: "Atenção",
    content: "Deseja realmente excluir?",
    type: "red",
    autoClose: "cancel|5000",
    buttons: {
      delete: {
        text: "Excluir",
        action: function () {
          ajax_imgs(id);
        },
        btnClass: "btn-red any-other-class", // multiple classes.
      },
      cancel: {
        text: "Cancelar",
      },
    },
  });
}

function modal_editar(json) {
  $("#idE").val(json.id);
  $("#tituloE").val(json.title);
  $("#conteudoE").summernote("code", json.text);
  $("#editar").modal("show");
}

function modal_detalhes(json) {
  $("#tituloD").val(json.title);
  $("#conteudoD").summernote("code", json.text);
  $("#atualizacaoD").val(json.update_date);
  $("#detalhes").modal("show");
}
