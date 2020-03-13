<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="https://github.com/JuanvictorO">
    <meta name="description" content="Testing the summernote with a table">

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP 4.0 CDNjs -->
    <script src="<?= base_url('assets/vendor/') ?>bootstrap-4.4.1/popper.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/vendor/') ?>bootstrap-4.4.1/bootstrap.min.css">
    <script src="<?= base_url('assets/vendor/') ?>bootstrap-4.4.1/bootstrap.min.js"></script>

    <!-- Summernote CDN -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
    <!-- Toastr CDN -->
    <link href="<?= base_url('assets/vendor/') ?>toastr/toastr.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/vendor/') ?>toastr/toastr.min.js"></script>

    <!-- Font Awesome CDN --->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/') ?>css/index.min.css" rel="stylesheet">
</head>

<body>
    <!-- Input que armazena o base url -->
    <input id="base_url" type="hidden" value="<?= base_url() ?>">
    <div class="d-flex" id="wrapper" style="height: 100%;">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center mt-3 font-weight-bold">Summernote<br>Integration</div>
            <div class="list-group list-group-flush pl-4 mt-2">
                <a href="<?= base_url('') ?>"><i class="fas fa-plus pr-2"></i>Inserir</a>
                <a href="<?= base_url('summernote/listar') ?>"><i class="fas fa-list pr-2"></i>Listar</a>
                <a href="<?= base_url('summernote/sobre') ?>"><i class="fas fa-info pr-2"></i>Sobre</a>
            </div>
        </div>
        <div class="main mt-5 mx-5">
            <div class="container mt-3">
                <form method="post" action="<?= base_url('summernote/insert') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input name="title" type="text" class="form-control" id="title" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label for="summernote">Insira o texto aqui:</label>
                        <textarea id="summernote" name="text"></textarea>
                    </div>
                    <div class="text-right">
                        <input class="btn btn-primary px-3 py-2" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    // Constante que armazena o base_url do input
    const base_url = $('#base_url').val();

    // Inicializa o summernote e define suas opções
    $('#summernote').summernote({
        height: 300,
        callbacks: {
            onImageUpload: function(files) {
                for (var i = 0; i < files.length; i++) {
                    $.upload(files[i]);
                }
            },
            onMediaDelete: function(target) {
                deleteFile(target[0].src);
            }
        }
    });

    // Variáveis globais que auxiliam nas funções(beforeunload) de exclusão de imagens
    vetor = [''];
    i = -1;

    // Função que faz o upload da foto para a pasta uploads
    $.upload = function(file) {
        let out = new FormData();
        out.append('file', file, file.name);

        $.ajax({
            data: out,
            method: "POST",
            url: base_url + "summernote/uploadFile",
            cache: false,
            processData: false,
            contentType: false,
            success: function(res) {
                if (res.error == 0) {
                    $('#summernote').summernote('insertImage', res.message);
                    var img = res.message.split("/assets/uploads/");
                    i++;
                    vetor[i] = img[1];
                } else {
                    toastr["warning"](res.message);
                }
            },
            error: function(res) {
                alert('Algo deu errado.');
            },
            dataType: 'json'
        });
    }

    // Deleta a imagem passada pela variável src
    function deleteFile(src) {
        $.ajax({
            data: {
                src: src
            },
            method: "POST",
            url: base_url + "summernote/deleteFile",
            cache: false,
            success: function(resp) {
                toastr["success"](resp);
            },
            error: function(msg) {
                toastr["error"](resp);
            }
        });
    }

    // Desabilita o 'beforeUnload' quando houver um submit no navegador
    $(document).on("submit", "form", function(event) {
        // disable unload warning
        $(window).off('beforeunload');
    });

    // Verifica se o navegador será atualizado ou fechado e, antes desses eventos, executa a função
    $(window).bind("beforeunload", function(event) {
        deleteFileBeforeUnload(vetor);
    });

    // Deleta todas as imagens passadas no array
    function deleteFileBeforeUnload(array) {
        if (array != '') {
            $.ajax({
                data: {
                    imgs: JSON.stringify(array)
                },
                method: "POST",
                url: base_url + "summernote/deleteFileBeforeUnload",
                cache: false,
                success: function(resp) {
                    console.log(resp);
                }
            });
        }
    }

    // Opções do toastr
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
<!-- Exibe as notificações (se existirem) -->
<script>
    <?= get_notification('notify') ?>
</script>

</html>