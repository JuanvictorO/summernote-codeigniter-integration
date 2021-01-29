<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="https://github.com/JuanvictorO">
    <meta name="description" content="Summernote integration/modification with the framework codeigniter">

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

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
                <a target="_blank" href="https://github.com/JuanvictorO/summernote-codeigniter-integration#readme"><i
                        class="fas fa-info pr-2"></i>Sobre</a>
            </div>
        </div>
        <div class="main mt-5 mx-5">
            <div class="container mt-3">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-hover ">
                        <thead class="thead-light">
                            <tr>
                                <th class="limit-title">Título</th>
                                <th>Atualizado em</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) : ?>
                            <tr>
                                <td class="limit-1"><?= $row->title ?></td>
                                <td><?= convert_date($row->update_date) ?></td>
                                <td class="text-center">
                                    <div class="col">
                                        <div class="btn-group border" role="group">
                                            <button type="button" class="item p-1 mx-1"
                                                onclick="ajax(<?= $row->id ?>, 1,'summernote/ajax/')" title="editar">
                                                <i class="far fa-edit text-dark"></i>
                                            </button>
                                            <button type="button" class="item p-1 mx-1 "
                                                onclick="ajax(<?= $row->id ?>, 2,'summernote/ajax/')" title="detalhes">
                                                <i class="fas fa-info-circle text-dark"></i>
                                            </button>
                                            <button type="button" class=" item p-1 mx-1 "
                                                onclick="excluir(<?= $row->id ?>)" title="excluir">
                                                <i class="fas fa-trash-alt text-dark"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<!-------------- MODAL EDITAR --------------->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title-2">Editar notícia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('summernote/update') ?>" method="post">
                    <div class="form-group">
                        <label class="control-label mb-1">Título</label>
                        <input maxlength="255" id="tituloE" name="titulo" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Conteúdo</label>
                        <textarea name="conteudo" id="conteudoE" class="editor mt-2 summernote"
                            placeholder="Disserte sobre a notícia"></textarea>
                    </div>
                    <input id="idE" name="id" type="hidden" class="form-control" value=''>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!------------ MODAL DETALHES --------->
<div class="modal fade" id="detalhes" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title-2">Detalhes da notícia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label mb-1">Título</label>
                    <input maxlength="255" name="titulo" id="tituloD" type="text" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Data de atualização</label>
                    <textarea id="atualizacaoD" class="form-control" name="atualizacao" rows="1" disabled></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Conteúdo</label>
                    <textarea name="conteudo" id="conteudoD" class="form-control" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- biblioteca que faz buttons de confirmação/negação -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/jquery-confirm/jquery-confirm.min.css') ?>">
<script type="text/javascript" src="<?= base_url('assets/vendor/jquery-confirm/jquery-confirm.min.js') ?>"></script>
<!-- Arquivo com funções para auxiliar no módulo de editar, visualizar e excluir umas notícia -->
<script src="<?= base_url('assets/js/functions.min.js') ?>"></script>
<!-- Arquivo com função ajax que recebe as informações do ID passado e redireciona para o modal correto (edição ou detalhes) -->
<script src="<?= base_url('assets/js/ajax.min.js') ?>"></script>
<!-- Arquivo js com as modificações feitas na biblioteca summernote -->
<script src="<?= base_url('assets/js/summernote-integration.min.js') ?>"></script>

<!-- Loading datatables -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/datatables/') ?>datatables.min.css" />
<script type="text/javascript" src="<?= base_url('assets/vendor/datatables/') ?>datatables.min.js"></script>
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
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

/* Data table */
var table = $('.table').DataTable({
    //Não ordenar como default nenhuma
    "order": [],
    "ordering": false,

    language: {
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_  resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
        },
        "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
        }
    }
});
</script>

<!-- Get notification PAGE -->
<script>
<?= get_notification('notify') ?>
</script>

</html>