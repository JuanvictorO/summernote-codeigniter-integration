<div class="site-main-container">
    <section class="latest-post-area pb-20 m-0">
        <div class="col-lg-12 col-12">
            <div class="row">
                <div class="pt-4 p-0 col-lg-8 col-sm-12 col-12">
                    <div class="latest-post-wrap col-lg-12 mt-0">
                        <div class="single-latest-post row align-items-center">
                            <!-- Modelo postagem notícias -->
                            <div class="row">
                                <div class="p-0 col-lg-12 post-list">
                                    <!-- Start single-post Area -->
                                    <div style="margin-top: -20px" class="p-0 single-post-wrap">
                                        <div style="float: left; padding-left: 15px" class="col-lg-6 col-sm-6 col-12 feature-img-thumb relative pb-20">

                                            <?php
                                            $url = 'http://www.novafriburgoagora.com.br/imagens/noticias/amp/' . fill_zeros($news->id_noticia_foto) . '_00000001.jpg';
                                            if (file_exists($url) === 1) {
                                                echo '<a href="http://www.novafriburgoagora.com.br/imagens/noticias/amp/' . fill_zeros($news->id_noticia_foto) . '_00000001.jpg" data-lightbox="image-1"><img class="p-2 pr-3 img-fluid" src="' . $url . '" title="' . $news->titulo_noticia . '" alt="' . $news->titulo_noticia . '"></a>';
                                            } else {
                                                echo '<img class="img-fluid" src="http://novafriburgoagora.com.br/imagens/default.jpg">';
                                            }
                                            ?>

                                            <figcaption class="p-2">
                                                <p><?php if ($news->legenda) {
                                                        echo $news->legenda;
                                                    } ?></p>
                                            </figcaption>
                                        </div>
                                        <div class="p-4 content-wrap">
                                            <a>
                                                <h1 class="h1-detalhes pt-2"><?= $news->titulo_noticia ?></h1>
                                            </a>
                                            <hr>
                                            <em class="limit-2 detalhamento-subtitulo text-black"><?= $news->descricao_noticia ?></em>
                                            <hr>
                                            <ul class="pb-20">
                                                <li class="text-black">
                                                    <a>
                                                        <span class="lnr lnr-calendar-full"> </span>
                                                        <?= format_date_text($news->data_noticia) ?>
                                                    </a>
                                                </li>
                                                <?php
                                                if ($news->autor_noticia) {
                                                ?>
                                                    <li class="text-black">
                                                        <a>
                                                            <span class="lnr lnr-user"> </span>
                                                            <?= $news->autor_noticia ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                            <div>
                                                <p style="clear: both;">
                                                    <?= $news->texto_noticia ?>
                                                </p>
                                            </div>
                                            <div class="text-center">
                                                <a target="_blank" href="http://www.altaredecorporate.com.br">
                                                    <img title="Altarede Corporate" class="img-fluid" src="http://www.novafriburgoagora.com.br/imagens/anuncio-altarede-retangulo.jpg">
                                                </a>
                                            </div>
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
                                                        <img class="img-fluid" src="<?= base_url('imagens/noticias/fotos/' . fill_zeros($row->id_noticia_foto) .  '_00000001.jpg') ?>" title="<?= $row->titulo_noticia ?>" alt="<?= $row->titulo_noticia ?>">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-8 p-0">
                                                <a href="<?= base_url('noticias/detalhes/' . $row->id_noticia . '/' . url_amigavel($row->titulo_noticia) . '')  ?>.html">
                                                    <h4 class="titulo-thumb">
                                                        <?= $row->titulo_noticia ?>
                                                    </h4>
                                                </a>
                                                <!-- class="limit-1-cd" -->
                                                <p>
                                                    <?= $row->descricao_noticia ?>
                                                </p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="text-align-right col-lg-12 load-more">
                                        <a href="<?= base_url('noticias') ?>" class="primary-btn">Ver mais</a>
                                    </div>
                                </div>

                                <!-- Agenda em detalhes -->
                                <div class="m0-p15 col-lg-6 col-12">
                                    <a href="<?= base_url('agenda') ?>">
                                        <h4 class="border-arrodondada cat-title-des">Confira nossa agenda:</h4>
                                    </a>
                                    <div class="single-latest-post row align-items-center">
                                        <?php
                                        if (empty($schedule)) {
                                        ?>
                                            <p class="col-lg-12 text-center">Não há nenhum evento cadastrado no momento.</p>
                                            <?php
                                        } else {
                                            foreach ($schedule as $row) :
                                            ?>
                                                <div class="col-lg-4 col-4 p-15 pt-2 pb-2">
                                                    <div class="feature-img relative">
                                                        <a href="<?= base_url('agenda/detalhes/' . $row->id_agenda_evento . '/' . url_amigavel($row->titulo_evento) . '') ?>.html">
                                                            <div class="overlay overlay-bg"></div>
                                                            <?php
                                                            $url = base_url() . 'imagens/agenda/fotos/' . fill_zeros($row->id_agenda_evento) . '_00000001.jpg';
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
                                            ?>
                                            <div class="text-align-right col-lg-12 load-more">
                                                <a href="<?= base_url('agenda') ?>" class="primary-btn">Ver mais</a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Anúncio 1 - 300x250 - Aparece apenas em celulares -->
                    <div class="d-sm-none d-md-none d-xl-none pb-2">
                        <div class="col-lg-12 row m-0 p-0 ml-1 ">
                            <?php
                            // $this->load->view('publicidades/publicidade-1');

                            //$this->load->view('publicidades/publicidade-7');
                            ?>
                        </div>
                    </div>
                </div>