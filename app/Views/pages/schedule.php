<div class="site-main-container">
    <section class="latest-post-area pb-20 m-0">
        <div class="col-lg-12 col-12">
            <div class="row">
                <div class="p-0 col-lg-8 col-12">
                    <!-- Início notícias -->
                    <div style="margin-top: 5px" class=" latest-post-wrap col-lg-12">
                        <a href="<?= base_url(); ?>">
                            <h1 class="border-arrodondada cat-title"><span class="lnr lnr-arrow-left"> </span>AGENDA</h1>
                        </a>
                        <div class="single-latest-post row align-items-center">
                            <!-- Modelo postagem notícias -->
                            <?php
                            if ($eventos = '') {
                                foreach ($eventos as $row) :
                            ?>
                                    <div class="col-lg-3 col-6 post-left p-15">
                                        <div class="feature-img relative">
                                            <a href="<?= base_url('agenda/detalhes/' . $row->id_agenda_evento . '/' . url_amigavel($row->titulo_evento) . '') ?>.html">
                                                <div class="overlay overlay-bg"></div>

                                                <?php
                                                $url = base_url('imagens/agenda/fotos/' . fill_zeros($row->id_agenda_evento) . '.jpg');
                                                if (file_exists($url) == 1) {
                                                    echo '<img class="img-fluid" title="' . $row->titulo_evento . '" src="' . $url . '" alt="' . $row->titulo_evento . '">';
                                                } else {
                                                    echo '<img class="img-fluid" src="http://novafriburgoagora.com.br/imagens/default.jpg">';
                                                }
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 pt-10">
                                        <a href="<?= base_url('agenda/detalhes/' . $row->id_agenda_evento . '/' . url_amigavel($row->titulo_evento) . '') ?>.html">
                                            <h2 class="titulo-thumb">
                                                <?= $row->titulo_evento ?>
                                            </h2>
                                        </a>
                                        <ul class="meta">
                                            <li><span class="lnr lnr-calendar-full"></span><?= format_date_text($row->data_evento) ?></li>
                                        </ul>

                                        <?php
                                        if ($row->local_evento == "") {
                                        ?>
                                            <p class="resumo-eventos"><span class="lnr lnr-map-marker"></span><?= $row->local_evento ?></p>
                                        <?php } ?>
                                    </div>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <p class="p-4 pb-0 col-12">Infelizmente não temos nenhuma agenda cadastrada. <span class="lnr lnr-sad"></span></p>
                                <p class="p-4 pt-0 col-12">Tem algum evento que queira divulgar?<a href="<?= base_url('contato') ?>"> Clique aqui</a>.</p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Agenda em detalhes -->
                    <div style="margin-top: 15px;padding: 20px" class="col-lg-12 col-12">
                        <h4 id="eventos_passados">Eventos passados:</h4>
                        <div class="single-latest-post row align-items-center">
                            <!-- Modelo postagem notícias -->
                            <?php
                            foreach ($eventos_passados as $row) :
                                $url = base_url() . 'imagens/agenda/amp/' . fill_zeros($row->id_agenda_evento) . '.jpg';
                            ?>
                                <div class="col-lg-2 col-4 p-15">
                                    <div class="feature-img relative">
                                        <a href="<?= base_url('agenda/detalhes/' . $row->id_agenda_evento . '/' . url_amigavel($row->titulo_evento) . '') ?>.html">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" title="<?= $row->titulo_evento ?>" src="<?= $url ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-8">
                                    <a href="<?= base_url('agenda/detalhes/' . $row->id_agenda_evento . '/' . url_amigavel($row->titulo_evento) . '') ?>.html">
                                        <h4 class="titulo-thumb">
                                            <?= $row->titulo_evento ?>
                                        </h4>
                                    </a>
                                    <p class="limit-1-cd"><span class="lnr lnr-map-marker"></span><?= $row->local_evento ?></p>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <!-- Anúncio 1 - 300x250 - Aparece apenas em celulares -->
                    <div class="d-sm-none d-md-none d-xl-none pb-2">
                        <div class="col-lg-12 row m-0 p-0 ml-1 ">
                            <?php
                            //$this->load->view('publicidades/publicidade-1');

                            //$this->load->view('publicidades/publicidade-7');
                            ?>
                        </div>
                    </div>
                </div>