<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url('assets/favicon.ico'); ?>">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="author" content="Tambora Filmes - www.tamborafilmes.com.br">
    <meta name="keywords" content="Nova Friburgo Agora, Clima, Previsão, Tempo, Notícias, Eventos, Agenda, Friburgo">
    <!-- TROCAR PARA FONTAWESOME ---------------------------------------------------->

    <link rel="stylesheet" href="<?= base_url('assets/css/linearicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/correction.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.min.css'); ?>">
    <!-- Baixar fonts em vez de via CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <?php
    if (isset($link)) {
        foreach ($link as $row) :
            echo $row;
        endforeach;
    }
    ?>

    <!-- Facebook Pixel Code -->
    <!--script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2220712544911202');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=2220712544911202&ev=PageView
      &noscript=1" />
    </noscript-->
    <!-- End Facebook Pixel Code -->
    <style>
        #background-template {
            background-image: url('<?= base_url('assets/img/temas/header-outono.png') ?>');
        }
    </style>
</head>

<body style="background: #fffaee">
    <input id="base_url" type="hidden" value="<?= base_url() ?>">
    <div id="background-template" style="background-repeat: no-repeat; background-size: 100% auto;">
        <header>
            <!-- Div de correção do menu -->
            <div class="logo-wrap pb-0">
            </div>
            <!-- Div menu principal -->
            <div class="col-lg-12 col-12 col-md-12 container main-menu" id="main-menu">
                <div class="justify-content-between row align-items-center">
                    <!-- Nav menu principal -->
                    <nav class="mr-auto ml-auto" id="nav-menu-container">

                        <ul class="nav-menu">
                            <li class="">
                                <div class="d-lg-none">
                                    <a href="<?= base_url('') ?>">
                                        <img style="width: 70%;" class="img-fluid mt-0" src="<?= base_url('assets/img/logo.png') ?>" alt="Logo-Menu-NFA" title="Logo NFA">
                                    </a>
                                </div>
                            </li>
                            <li class="correct-name-menu"><a class="f-1" href="<?= base_url('') ?>">Início</a></li>
                            <li class="correct-name-menu"><a class="f-1" href="<?= base_url('agenda') ?>">Agenda</a></li>
                            <li class="correct-name-menu"><a class="f-1" href="<?= base_url('noticias') ?>">Notícias</a></li>
                            <li class="">
                                <div class="d-none d-lg-block">
                                    <a href="<?= base_url('') ?>">
                                        <img class="logo-nfa-menu-top" class="img-fluid" src="<?= base_url('assets/img/logo.png') ?>" alt="Logo-Menu-NFA" title="Logo NFA">
                                    </a>
                                </div>
                            </li>
                            <li class="correct-name-menu"><a class="f-1" href="<?= base_url('contato') ?>">Contato</a></li>
                            <li class="correct-name-menu"><a class="f-1" href="<?= base_url('radio') ?>">OUÇA NOSSA RÁDIO</a></li>
                        </ul>
                    </nav>

                </div>

            </div>

        </header>
        <div class="max-width-1920">
            <!-- Anúncio 1 - 728x90 - Aparece apenas em desktop -->
            <div class="mt-5 d-none d-sm-block">
                <div class="col-lg-12 row m-0 p-0 ml-1 ">
                    <?php
                    $publicity->show(1);
                    $publicity->show(7);
                    ?>
                </div>
            </div>