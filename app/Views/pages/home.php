<div class="site-main-container">
    <section class="latest-post-area pb-20 m-0">
        <div class="col-lg-12 col-12">
            <div class="row">
                <div class="pt-4 p-0 col-lg-8 col-sm-12 col-12">
                    <div class="top-post-left">
                        <div class="relative sidebars-area latest-post-wrap mt-0 py-0">
                            <h1 class="my-3 mx-1 title-stream border-arrodondada cat-title">CÂMERAS <span class="title-ao-vivo" id="title-ao-vivo">AO VIVO</span></h1>
                            <div class="overlay overlay-bg"></div>
                            <div class="pb-2 embed-responsive embed-responsive-16by9">
                                <iframe id="camera" scrolling="no" allow="autoplay;" muted class="embed-responsive-item" src="http://www.nethorizontes.com.br/flashmediaserver/grooveip01" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            <?php
                            /*if ($avisos_estacao) {
                                echo '
               <div id="avisos_estacao" style="padding:5px 25px">
                <marquee style="color: white; margin-top:5px ;font-weight: 200; letter-spacing:1px">' . $avisos_estacao->descricao_aviso . '</marquee>
               </div>
               ';
                            }*/ ?>
                        </div>
                    </div>

                    <!-- BOXES COM IMG E TEXTOS ABAIXO DA CÂMERA -->
                    <div class="d-block latest-post-wrap pt-3">
                        <div class="centered text-center">
                            <div class="single-latest-post align-items-center row">
                                <!-- CAMERA 1 | BRAUNES -->
                                <div class="col-lg-3 col-sm-3 col-6">
                                    <div id="camera01" class="feature-img relative c-pointer">
                                        <div class="overlay overlay-bg"></div>
                                        <img src="http://www.novafriburgoagora.com.br/imagens/cameras/amp/00000005.jpg" class="img-fluid" alt="Alto das Braunes" title="Alto das Braunes">
                                    </div>
                                    <p class="text-center subtitle-camera">Alto das Braunes - Nova Friburgo Agora
                                    </p>
                                </div>
                                <!-- CAMERA 2 | ARARATE -->
                                <div class="col-lg-3 col-sm-3 col-6">
                                    <div id="camera02" class="feature-img relative c-pointer">
                                        <div class="overlay overlay-bg"></div>
                                        <img src="http://www.novafriburgoagora.com.br/assets/img/camera_caledonia.png" class="img-fluid" alt="Pico da Caledônia" title="Pico da Caledônia">
                                    </div>
                                    <p class="text-center subtitle-camera"><a data-toggle="tooltip" data-placement="bottom" title="Clique para acessar o site" class="text-muted" target="_blank" href="https://www.facebook.com/campingpicodacaledonia/">Ararate - Camping Pico da Caledônia</a></p>
                                </div>
                                <!-- BOX 3 | AMIGOS DE NOVA FRIBURGO -->
                                <div class="col-lg-3 col-sm-3 col-6">
                                    <a target="_blank" href="https://www.youtube.com/channel/UCuWe_KWALkSXuhB8SQJ8J6A">
                                        <div class="feature-img relative c-pointer">
                                            <div class="overlay overlay-bg"></div>
                                            <img src="<?= base_url('assets/img/amigos_episodio1.png') ?>" class="img-fluid" alt="Amigos de Nova Friburgo" title="Amigos de Nova Friburgo">
                                        </div>
                                        <p class="text-center subtitle-camera">Amigos de Nova Friburgo Clique aqui</p>
                                    </a>
                                </div>
                                <!--div style="visibility: hidden" class="col-lg-3 col-sm-3 col-6">
                                    <div id="camera03" class="feature-img relative c-pointer">
                                        <div class="overlay overlay-bg"></div>
                                        <img src="<?= base_url('assets/img/nova_camera.jpg') ?>" class="img-fluid" alt="Em breve nova câmera!" title="Em breve nova câmera!">
                                    </div>
                                    <p class="text-center subtitle-camera">
                                        Em breve nova câmera disponível!
                                    </p>

                                </div-->
                                <div class="col-lg-3 col-sm-3 col-6">
                                    <a target="_blank" href="http://www.inmet.gov.br/portal/index.php?r=tempo2/verProximosDias&code=3303401">
                                        <div class="feature-img relative ">
                                            <img src="<?= base_url('assets/img/inmet.png') ?>" class="img-fluid" alt="Previsão do tempo" title="Previsão do tempo">

                                        </div>
                                        <p class="text-center subtitle-camera">Previsão do tempo - Clique aqui</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PARTE DE ESTAÇÃO E RÁDIO QUE APARECERÁ EM ALGUMAS RESOLUÇÕES -->
                    <script>
                        setInterval(refreshIframe, 50000);

                        function refreshIframe() {
                            var frame = document.getElementById("estacao");
                            frame.src = frame.src;
                        }
                    </script>
                    <div id="estacao_radio_min" class="d-lg-none">
                        <div class="m15t single-sidebar-widget social-network-widget">
                            <div class="p-2">
                                <div class="feature-post relative">
                                    <div class="p-0 col-lg-12">
                                        <div style="background-color: transparent;" class="embed-responsive embed-responsive-4by3">
                                            <iframe id="estacao" scrolling='NO' class="embed-responsive-item" src="<?= base_url('station') ?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 single-sidebar-widget social-network-widget">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div style="margin-left: -1em">
                                    <iframe class="radio-nfa" id="radio-nfa" scrolling="no" src="http://novafriburgoagora.com.br/RADIO/radionfa.html"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Div clima -->
                    <!-- Anúncio 1 - 300x250 - Aparece apenas em celulares -->
                    <div style="margin-top: -10%" class="d-sm-none d-md-none d-xl-none pb-2">
                        <div class="col-lg-12 row m-0 p-0 ml-1 ">
                            <?php
                            /* $this->load->view('publicidades/publicidade-1');

                            $this->load->view('publicidades/publicidade-7');
                            */
                            ?>
                        </div>
                    </div>
                    <!-- Início notícias -->

                    <div style="margin-top: -10px" class="latest-post-wrap col-lg-12">
                        <a href="<?= base_url('noticias') ?>">
                            <h4 class="border-arrodondada cat-title">NOTÍCIAS</h4>
                        </a>
                        <div class="single-latest-post row align-items-center">
                            <!-- Modelo postagem notícias -->
                            <?php
                            foreach ($news as $row) :
                            ?>
                                <div class="col-lg-4 col-sm-4 post-left p-15">
                                    <div class="feature-img relative">
                                        <a href="<?= base_url('noticias/detalhes/' . $row->id_noticia . '/' . url_amigavel($row->titulo_noticia) . '')  ?>.html">
                                            <div class="overlay overlay-bg"></div>

                                            <?php
                                            $url = base_url('imagens/noticias/fotos/' . fill_zeros($row->id_noticia_foto) . '_00000001.jpg');
                                            if (file_exists($url) === 1) {
                                                echo '<img class="img-fluid" title="' . $row->titulo_noticia . '" src="' . $url . '" alt="' . $row->titulo_noticia . '">';
                                            } else {
                                                echo '<img class="img-fluid" src="http://novafriburgoagora.com.br/imagens/default.jpg">';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-8 pt-15">
                                    <a href="<?= base_url('noticias/detalhes/' . $row->id_noticia . '/' . url_amigavel($row->titulo_noticia) . '')  ?>.html">
                                        <h2 class="titulo-thumb">
                                            <?= $row->titulo_noticia ?>
                                        </h2>
                                    </a>
                                    <ul class="meta">
                                        <li><span class="lnr lnr-calendar-full"></span><?= format_date_text($row->data_noticia) ?></li>
                                        <?php if ($row->autor_noticia != "") { ?>
                                            <li><a><span class="lnr lnr-user"></span><?= $row->autor_noticia ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <p class="resumo-noticias">
                                        <?= $row->descricao_noticia ?>
                                    </p>
                                </div>
                            <?php
                            endforeach;
                            ?>
                            <div class="col-lg-12 load-more text-right">
                                <a href="<?= base_url('noticias') ?>" class="primary-btn">Ver mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="pub-2-m">
                        <?php
                        // $this->load->view('publicidades/publicidade-2');
                        ?>
                    </div>

                    <!-- Início agendas -->
                    <div class="mt-15 latest-post-wrap">
                        <a href="<?= base_url('agenda') ?>">
                            <h4 class="border-arrodondada cat-title">AGENDA</h4>
                        </a>
                        <div class="single-latest-post row align-items-center">
                            <!-- Modelo postagem eventos -->
                            <?php
                            if ($schedule == '') {
                                foreach ($schedule as $row) :
                            ?>
                                    <div class="col-lg-3 col-sm-4 col-6 post-left p-15">
                                        <div class="feature-img relative">
                                            <a href="<?= base_url('agenda/detalhes/' . $row->id_agenda_evento . '/' . url_amigavel($row->titulo_evento) . '') ?>.html">
                                                <div class="overlay overlay-bg"></div>

                                                <?php
                                                $url = base_url('imagens/agenda/fotos/' . fill_zeros($row->id_agenda_evento) . '_00000001.jpg');
                                                if (file_exists($url) == 1) {
                                                    echo '<img class="img-fluid" src="' . $url . '" title="' . $row->titulo_evento . '" alt="' . $row->titulo_evento . '">';
                                                } else {
                                                    echo '<img class="img-fluid" src="http://novafriburgoagora.com.br/imagens/default.jpg">';
                                                }
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-8 col-6 pt-10">
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
                                <?php endforeach; ?>
                                <div class="col-lg-12 load-more text-right">
                                    <a href="<?= base_url('agenda') ?>" class="primary-btn">Ver mais</a>
                                </div>
                            <?php
                            } else {
                            ?>
                                <p class="col-lg-12">Não há nenhum evento cadastrado no momento.</p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>