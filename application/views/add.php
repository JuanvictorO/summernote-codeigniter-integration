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

    // Variável global que vai armazenar os valores antigos do campo do summernote
    oldValue = '';

    // Inicializa o summernote e define suas opções
    $('#summernote').summernote({
                height: 300,
                callbacks: {
                    onInit: function() {
                        oldValue = this.value;
                        console.log(oldValue);
                    },
                    onImageUpload: function(files) {
                        for (var i = 0; i < files.length; i++) {
                            $.upload(files[i], $(this));
                        }
                    },
                    onMediaDelete: function(target) {
                        deleteFile(target[0].src);
                    },
                    onKeyup: function(e) {
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
                            console.log('newImages = ' + newImages + ' \noldImages = ' + oldImages);
                            var imgsDeletadas = [];
                            $.each(oldImages, function(i, img) {
                                var x = 0;
                                $.each(newImages, function(f, img2) {
                                    if (img == img2) {
                                        x = 1;
                                    }
                                });
                                if (x == 0) {
                                    var temp = img.match(/src="([^"]*)"/);
                                    temp = temp[1].split('/assets/uploads/');
                                    imgsDeletadas.push(temp[1]);
                                }
                            });
                            if (imgsDeletadas.length != 0) {
                                deleteOnCascade(imgsDeletadas);
                            } else {
                                oldValue = $('.note-editable.card-block')[0].innerHTML;
                            }
                        }
                    }
                });

            // Variáveis globais que auxiliam nas funções(beforeunload) de exclusão de imagens
            vetor = ['']; i = -1;

            // Função que faz o upload da foto para a pasta uploads
            $.upload = function(file, summernote) {
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
                            summernote.summernote('insertImage', res.message);
                            var img = res.message.split("/assets/uploads/");
                            i++;
                            vetor[i] = img[1];
                            summernote[0].oldValue = $('.note-editable.card-block')[0].innerHTML;
                            oldValue = summernote[0].oldValue + '<img src="' + base_url + 'assets/uploads/' + img[1] + '">';
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
                    },
                    complete: function() {
                        oldValue = $('.note-editable.card-block')[0].innerHTML;
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
                deleteOnCascade(vetor);
            });

            // Envia um vetor de imgs para serem excluídas no PHP
            function deleteOnCascade(array) {
                if (array != '') {
                    $.ajax({
                        data: {
                            imgs: JSON.stringify(array)
                        },
                        method: "POST",
                        url: base_url + "summernote/deleteOnCascade",
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