// Constante que armazena o base_url do input
const base = $("#base_url").val();

// Variável global que vai armazenar os valores antigos do campo do summernote
oldValue = "";

// Inicializa o summernote e define suas opções
$(".summernote").summernote({
  height: 300,
  callbacks: {
    onInit: function () {
      oldValue = this.value;
    },
    onImageUpload: function (files) {
      for (var i = 0; i < files.length; i++) {
        $.upload(files[i], $(this));
      }
    },
    onMediaDelete: function (target) {
      deleteFile(target[0].src);
    },
    onKeyup: function (e) {
      if (e.keyCode == 8 || e.keyCode == 46) {
        var newValue = e.target.innerHTML;

        var oldImages = oldValue.match(/<img\s(?:.+?)>/g);

        if (oldImages) {
          oldImages = oldImages;
        } else {
          oldImages = [];
        }

        var newImages = newValue.match(/<img\s(?:.+?)>/g);

        if (newImages) {
          newImages = newImages;
        } else {
          newImages = [];
        }

        oldValue = newValue;

        var imgsDeletadas = [];
        $.each(oldImages, function (i, img) {
          var x = 0;
          var src = img.match(/src="([^"]*)"/);
          $.each(newImages, function (f, img2) {
            var src2 = img2.match(/src="([^"]*)"/);
            console.log(src[1] + " == " + src2[1]);
            if (src[1] == src2[1]) {
              x = 1;
              console.log(x);
              return false;
            }
          });
          if (x == 0) {
            var temp = img.match(/src="([^"]*)"/);
            temp = temp[1].split("/assets/uploads/");
            imgsDeletadas.push(temp[1]);
          }
        });
        if (imgsDeletadas.length != 0) {
          deleteOnCascade(imgsDeletadas);
        } else {
          oldValue = $(".note-editable.card-block")[0].innerHTML;
        }
      }
    },
  },
});

// Variáveis globais que auxiliam nas funções(beforeunload) de exclusão de imagens
vetor = [""];
i = -1;

// Função que faz o upload da foto para a pasta uploads
$.upload = function (file, summernote) {
  let out = new FormData();
  out.append("file", file, file.name);

  $.ajax({
    data: out,
    method: "POST",
    url: base + "summernote/uploadFile",
    cache: false,
    processData: false,
    contentType: false,
    success: function (res) {
      if (res.error == 0) {
        summernote.summernote("insertImage", res.message, function ($image) {
          $image.addClass("img-fluid");
          $image.attr("style", false);
        });
        var img = res.message.split("/assets/uploads/");
        i++;
        vetor[i] = img[1];
        summernote[0].oldValue = $(".note-editable.card-block")[0].innerHTML;
        oldValue =
          summernote[0].oldValue +
          '<img src="' +
          base +
          "assets/uploads/" +
          img[1] +
          '">';
      } else {
        toastr["warning"](res.message);
      }
    },
    error: function (res) {
      alert("Algo deu errado.");
    },
    dataType: "json",
  });
};

// Deleta a imagem passada pela variável src
function deleteFile(src) {
  $.ajax({
    data: {
      src: src,
    },
    method: "POST",
    url: base + "summernote/deleteFile",
    cache: false,
    success: function (resp) {
      toastr["success"](resp);
    },
    error: function (msg) {
      toastr["error"](msg);
    },
    complete: function () {
      oldValue = $(".note-editable.card-block")[0].innerHTML;
    },
  });
}

// Desabilita o 'beforeUnload' quando houver um submit no navegador
$(document).on("submit", "form", function (event) {
  // disable unload warning
  $(window).off("beforeunload");
});

// Verifica se o navegador será atualizado ou fechado e, antes desses eventos, executa a função
$(window).bind("beforeunload", function (event) {
  deleteOnCascade(vetor);
});

// Envia um vetor de imgs para serem excluídas no PHP
function deleteOnCascade(array) {
  if (array != "") {
    $.ajax({
      data: {
        imgs: JSON.stringify(array),
      },
      method: "POST",
      url: base + "summernote/deleteOnCascade",
      cache: false,
      success: function (resp) {
        console.log(resp);
      },
    });
  }
}

/*  Função que é chamada na exclusão de uma linha da tabela que possua o summernote. 
    Ela retorna todas as imagens no summernote daquela linha, exclui todas e redireciona para a função que exclui o campo da tabela.*/
function ajax_imgs(id) {
  $.ajax({
    data: "",
    type: "GET",
    url: base + "summernote/getImgs/" + id,
    async: true,
    success: function (json) {
      json.content = json.content.match(/<img\s(?:.+?)>/g);
      var imgsToDelete = [];
      $.each(json.content, function (i, img) {
        var temp = img.match(/src="([^"]*)"/);
        temp = temp[1].split("/assets/uploads/");
        imgsToDelete.push(temp[1]);
      });
      if (imgsToDelete.length != 0) {
        deleteOnCascade(imgsToDelete);
      }
      window.location.href = base + "summernote/deleteBlog/" + id;
    },
    dataType: "json",
  });
}
