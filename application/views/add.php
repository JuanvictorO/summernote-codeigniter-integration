<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="https://github.com/JuanvictorO">
    <meta name="description" content="Testing the summernote with a table">

    <!-- Font Awesome CDN --->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/') ?>css/index.min.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="<?= base_url('assets/vendor/jquery-3.4.1.min.js') ?>"></script>

    <!-- BOOTSTRAP 4.0 CDNjs -->
    <script src="<?= base_url('assets/vendor/') ?>bootstrap-4.4.1/popper.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/vendor/') ?>bootstrap-4.4.1/bootstrap.min.css">
    <script src="<?= base_url('assets/vendor/') ?>bootstrap-4.4.1/bootstrap.min.js"></script>

    <!-- Summernote CDN -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">

    <!-- Toastr CDN -->
    <link href="<?= base_url('assets/vendor/') ?>toastr/toastr.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/vendor/') ?>toastr/toastr.min.js"></script>
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
                <a target="_blank" href="https://github.com/JuanvictorO/summernote-codeigniter-integration#readme"><i
                        class="fas fa-info pr-2"></i>Sobre</a>
            </div>
        </div>
        <div class="main mt-5 mx-5">
            <div class="container mt-3">
                <form method="post" action="<?= base_url('summernote/insert') ?>">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input name="title" type="text" class="form-control" id="title" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label>Insira o conteúdo aqui:</label>
                        <textarea class="summernote" name="text" required></textarea>
                    </div>
                    <div class="text-right">
                        <input class="btn btn-primary px-3 py-2" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
<script src="<?= base_url('assets/js/summernote-integration.min.js') ?>"></script>
<script>
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
    "timeOut": "8000",
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