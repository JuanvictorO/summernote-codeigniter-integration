<div class="principal">
    <div class="d-none d-sm-block mt-5">
        <div class="col-lg-12 row m-0 p-0 ml-1 ">
            <?php
            //$this->load->view('publicidades/publicidade-1');
            //$this->load->view('publicidades/publicidade-7');
            ?>
        </div>
    </div>

    <div class="site-main-container">
        <section class="latest-post-area pb-20 m-0">
            <div class="container col-lg-12 col-12">
                <div class="row">
                    <div class="col-lg-12 radio-desktop">
                        <img class="mt-5 img-fluid" src="http://novafriburgoagora.com.br/assets/img/player_radio.png">
                        <div class="row">
                            <div class="col-lg-6 col-6">
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="embed-responsive embed-responsive-21by9 iframe-radio">
                                    <iframe class="embed-responsive-item" src="http://www.novafriburgoagora.com.br/RADIO/pagina-radio.html"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-2 container mt-4 radio-mobile">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="radio-nfa" id="radio-nfa" scrolling="no" src="http://novafriburgoagora.com.br/RADIO/radionfa-fundo-branco.html"></iframe>
                        </div>
                    </div>

                    <!-- Anúncio 1 - 300x250 - Aparece apenas em celulares -->
                    <div class="d-sm-none d-md-none d-xl-none pb-2 mt-0">
                        <div class="col-lg-12 row m-0 p-0 ml-1 ">
                            <?php
                            //$this->load->view('publicidades/publicidade-1');

                            //$this->load->view('publicidades/publicidade-7');
                            ?>
                        </div>
                    </div>
                    <div class="pt-4 p-0 col-lg-6 col-sm-12 col-12">
                        <div class="top-post-left">
                            <div class="row m-0">
                                <div class="col-lg-12 relative sidebars-area latest-post-wrap mt-0 pt-0">
                                    <div class="row m-0 div-img-cam">
                                        <h1 id="h1-cam" class="col title-stream  py-3 cat-title text-left"><span class="ml-0 mr-2 title-ao-vivo" id="title-ao-vivo">AO VIVO</span><span id="camera" class="pr-3 nome_camera">ALTO DAS BRAUNES </span>
                                        </h1>
                                        <h5 id="h5-cam" class="d-none d-md-inline col text-white text-right">
                                            CÂMERAS:
                                            <span style="opacity: 1" id="um" class="ml-1 um">
                                                <img title="Alto das Braunes" width="50px" src="http://www.novafriburgoagora.com.br/imagens/cameras/amp/00000005.jpg">
                                            </span>
                                            <span style="opacity: 0.5" id="dois" class="dois px-2">
                                                <img title="Pico da Caledônia" width="50px" src="http://www.novafriburgoagora.com.br/assets/img/camera_caledonia.png">
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="row p-2">
                                        <div class=" col-lg-12 pb-2 embed-responsive embed-responsive-16by9">
                                            <iframe scrolling='NO' class="embed-responsive-item camera" src="http://www.nethorizontes.com.br/flashmediaserver/grooveip01" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <?php
                                    /* if ($avisos_estacao) {
                                            echo '
                                 <div id="avisos_estacao" style="padding:5px 25px">
                                  <marquee style="color: white; margin-top:5px ;font-weight: 200; letter-spacing:1px">' . $avisos_estacao->descricao_aviso . '</marquee>
                                 </div>
                                 ';
                                        }*/ ?>
                                </div>
                                <div id="div-cam-sm" class="d-block latest-post-wrap d-md-none">
                                    <div class="centered text-center">
                                        <div class="single-latest-post align-items-center row">
                                            <div class="col-sm-6 col-6">
                                                <div id="camera01" class="um feature-img relative cursor">

                                                    <img class="img-fluid" src="http://www.novafriburgoagora.com.br/imagens/cameras/amp/00000005.jpg" alt="Alto das Braunes" title="Alto das Braunes">
                                                </div>
                                                <p class="name-cam">Alto das Braunes - Nova Friburgo Agora</p>
                                            </div>
                                            <div class="col-sm-6 col-6">
                                                <div id="camera02" class="dois feature-img relative cursor">
                                                    <img class="img-fluid" src="<?= base_url('assets/img/camera_caledonia.png') ?>" alt="Pico da Caledônia" title="Pico da Caledônia">
                                                </div>
                                                <p class="name-cam">
                                                    <a data-toggle="tooltip" data-placement="bottom" title="Clique para acessar o site" class="text-muted" target="_blank" href="https://www.facebook.com/campingpicodacaledonia/">Ararate - Camping Pico da Caledônia</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 20px; padding-right: 20px; " class="d-none d-md-inline col-lg-12">
                                    <a target="_blank" href="<?= base_url('') ?>">
                                        <h1 id="h1-subtitle" class="border-arrodondada text-uppercase p-3 text-right ">O <span style="color: yellow">NFA</span> é mais do que uma rádio <span id="span-descubra" class="text-white px-2 py-1"> DESCUBRA</span></h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="estacao_radio_min">
                        </div>
                    </div>
                    <div class="m0r col-lg-6 mt-2">
                        <!-- Div ultimas notícias - Apenas para desktop -->
                        <div style="margin-bottom: -1.5em;" id="estacao_radio_large">
                            <div class="m15t single-sidebar-widget social-network-widget">
                                <div class="p-0">
                                    <div class="feature-post relative">
                                        <div class="p-0 col-lg-12">
                                            <div style="background-color: transparent;" class="embed-responsive embed-responsive-4by3">
                                                <iframe id="estacao" scrolling='no' class="embed-responsive-item" src="<?= base_url('station') ?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>