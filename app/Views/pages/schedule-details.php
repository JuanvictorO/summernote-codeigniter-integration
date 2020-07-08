<div class="site-main-container">
    <section class="latest-post-area pb-20 m-0">
        <div class="col-lg-12 col-12">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Início notícias -->
                    <div class=" latest-post-wrap col-lg-12 mt-0">
                        <div class="single-latest-post row align-items-center">
                            <div class="row">
                                <div class="p-0 col-lg-12 post-list">
                                    <!-- Start single-post Area -->
                                    <div style="margin-top: -20px" class="p-0 single-post-wrap">
                                        <div style="float: left; padding-left: 15px" class="col-lg-6 col-sm-6 col-12 feature-img-thumb relative pb-20">

                                            <?php
                                            $url = base_url('imagens/agenda/fotos/' . fill_zeros($schedule->id_agenda_evento) . '.jpg');
                                            if (file_exists($url) == 1) {
                                                echo '<img class="img-fluid" title="' . $schedule->titulo_evento . '" src="' . $url . '" alt="' . $schedule->titulo_evento . '">';
                                            } else {
                                                echo '<img class="img-fluid" src="http://novafriburgoagora.com.br/imagens/default.jpg">';
                                            }
                                            ?>

                                        </div>
                                        <div class="p-4 content-wrap">
                                            <a>
                                                <h1 class="pba-2 h1-detalhes pb-2"><?= $schedule->titulo_evento . '' ?></h1>
                                            </a>
                                            <?php if ($schedule->subtitulo_evento) {
                                            ?>
                                                <hr>
                                                <em class="limit-2 pba-2 text-black"><?= $schedule->subtitulo_evento ?></em>
                                                <hr>
                                            <?php }  ?>
                                            <ul>
                                                <li class="limit-1 pba-2 text-black"><span class=" lnr lnr-calendar-full"> </span><?= format_date_text($schedule->data_evento) ?></li>

                                                <?php if ($schedule->data_evento) {
                                                ?>
                                                    <li class="limit-1 pba-2 text-black"><span class="lnr lnr-exit"> </span>Horário de inicio: <?= format_date_text($schedule->data_evento) ?></li>
                                                <?php } ?>


                                                <?php if ($schedule->local_evento) {
                                                ?>
                                                    <li class="limit-2 pba-2 text-black"><span class="lnr lnr-map-marker"> </span><?= $schedule->local_evento ?></li>
                                                <?php } ?>
                                                <?php if ($schedule->classificacao_evento) {
                                                ?>
                                                    <li class="limit-1 pba-2 text-black"><span class="lnr lnr-warning"> </span>Classificação: <?= $schedule->classificacao_evento ?></li>
                                                <?php } ?>
                                                <?php if ($schedule->telefone_evento) {
                                                ?>
                                                    <li class="limit-1 pba-2 text-black"><span class="lnr lnr-phone-handset"> </span>Telefone: <?= $schedule->telefone_evento ?></li>
                                                <?php } ?>
                                            </ul>
                                            <div style="clear: both;" class="p-1">
                                                <p><?= $schedule->descricao_evento ?></p>
                                            </div>
                                            <ul>
                                                <?php if ($schedule->site_evento) {
                                                ?>
                                                    <li class="pba-2">
                                                        <span class="lnr lnr-laptop-phone"> </span>
                                                        Site:
                                                        <a href="<?= $schedule->site_evento ?>" target="_blank">
                                                            <?= $schedule->site_evento ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($schedule->ingressos_evento) {
                                                ?>
                                                    <li class="pba-2"><span class="lnr lnr-cart"> </span>Ingressos: <?= $schedule->ingressos_evento ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Ultimas notícias -->

                                <div class="m0-p15 col-lg-6 col-12 ">
                                    <a href="<?= base_url('noticias') ?>">
                                        <h4 class="border-arrodondada cat-title-des">Veja as ultimas notícias:</h4>
                                    </a>
                                    <div class="single-latest-post row align-items-center">

                                        <!-- Foreach ultimas notícias -->
                                        <?php foreach ($old_news as $row) : ?>
                                            <div class="col-lg-4 col-4 p-15 pt-4 pb-2">
                                                <div class="feature-img relative">
                                                    <a href="<?= base_url('noticias/detalhes/' . $row->id_noticia . '/' . url_amigavel($row->titulo_noticia) . '')  ?>.html">
                                                        <div class="overlay overlay-bg"></div>
                                                        <img class="img-fluid" src="<?= 'http://novafriburgoagora.com.br/imagens/noticias/fotos/' . fill_zeros($row->id_noticia_foto) .  '_00000001.jpg' ?>" title="<?= $row->titulo_noticia ?>" alt="<?= $row->titulo_noticia ?>">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-8 p-0">
                                                <a href="<?= base_url('noticias/detalhes/' . $row->id_noticia . '/' . url_amigavel($row->titulo_noticia) . '')  ?>.html">
                                                    <h4 class="titulo-thumb">
                                                        <?= $row->titulo_noticia ?>
                                                    </h4>
                                                </a>
                                                <!-- class='limit-1-cd' -->
                                                <p>
                                                    <?= $row->descricao_noticia ?>
                                                </p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- Agenda em detalhes -->

                                <div class="m0-p15 col-lg-6 col-12">
                                    <a href="<?= base_url('agenda') ?>">
                                        <h4 class="border-arrodondada cat-title-des">Confira nossa agenda:</h4>
                                    </a>
                                    <div class="single-latest-post row align-items-center">
                                        <?php
                                        if (empty($schedules)) {
                                        ?>
                                            <p class="col-lg-12 text-center">Não há nenhum evento cadastrado no momento.</p>
                                            <?php
                                        } else {
                                            foreach ($schedules as $row) :
                                            ?>
                                                <div class="col-lg-4 col-4 p-15 pt-2 pb-2">
                                                    <div class="feature-img relative">
                                                        <a href="<?= base_url('agenda/detalhes/' . $row->id_agenda_evento . '/' . url_amigavel($row->titulo_evento)) ?>.html">
                                                            <div class="overlay overlay-bg"></div>

                                                            <?php
                                                            $url = 'http://novafriburgoagora.com.br/imagens/agenda/fotos/' . fill_zeros($row->id_agenda_evento) . '_00000001.jpg';
                                                            if (file_exists($url) == 1) {
                                                                echo '<img class="img-fluid" src="' . $url . '" title="' . $row->titulo_evento . '" alt="' . $row->titulo_evento . '">';
                                                            } else {
                                                                echo '<img class="img-fluid" src="http://novafriburgoagora.com.br/imagens/default.jpg">';
                                                            }
                                                            ?>
                                                        </a>
                                                        <div class="col-lg-8 col-8 p-0">
                                                            <a href="<?= base_url('agenda/detalhes/' . $row->id_agenda_evento . '/' . url_amigavel($row->titulo_evento) . '') ?>.html">
                                                                <h4 class="titulo-thumb">
                                                                    <?= $row->titulo_evento ?>
                                                                </h4>
                                                            </a>
                                                            <p class="limit-1-cd">
                                                                <span class="lnr lnr-map-marker"></span>
                                                                <?= $row->local_evento ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            endforeach;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Anúncio 1 - 300x250 - Aparece apenas em celulares -->
                    <?php /*
      $this->load->view('publicidades/publicidade-10'); */
                    ?>

                    <div class="d-sm-none d-md-none d-xl-none pb-2">
                        <div class="col-lg-12 row m-0 p-0 ml-1 ">
                            <?php
                            //$this->load->view('publicidades/publicidade-1');

                            // $this->load->view('publicidades/publicidade-7');
                            ?>
                        </div>
                    </div>
                </div>