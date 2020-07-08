<div class="col-lg-4 col-md-4 mt-2">
    <!-- Div ultimas notícias - Apenas para desktop -->
    <div id="estacao_radio_large" class="d-none d-lg-block mb-0">
        <div class="m15t single-sidebar-widget social-network-widget">
            <div class="p-0">
                <div class="feature-post relative">
                    <div class="p-0 col-lg-12">
                        <div class="embed-responsive embed-responsive-4by3 div-estation">
                            <iframe id="estacao" scrolling='NO' class="embed-responsive-item" src="<?= base_url('station') ?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pub-2-d">
            <?php
            //$this->load->view('publicidades/publicidade-2');
            ?>
        </div>
        <div class="p-4 single-sidebar-widget social-network-widget">
            <div class="p-0">
                <div class="feature-post relative">
                    <div class="p-0 col-lg-12">
                        <div class="divs-radio">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div style="margin-left: -1em">
                                    <iframe class="radio-nfa" id="radio-nfa" scrolling="no" src="http://www.novafriburgoagora.com.br/RADIO/radionfa.html"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL DE CADASTRO NEWSLETTER NFA -------------------->
    <div class="single-sidebar-widget newsletter-widget pb-0 mb-0 text-black" style="margin-top: -1.5em;">
        <h6 class="border-arrodondada title">Cadastre-se na Newsletter</h6>
        <div class="p-15 pb-0 pt-0">
            <p>
                Aqui você pode ter sempre as novidades em mãos na hora que precisar.
            </p>
            <form action="<?= base_url() ?>" id="form_newsletter" method="post">
                <div id="mensagem" class="mensagem alert alert-success" role="success">
                    Cadastro realizado com sucesso!
                </div>
                <div id="enviando" class="mensagem alert alert-info" role="info">
                    Enviando...
                </div>
                <div id="mensagem-erro" class="mensagem alert alert-danger" role="danger">
                    Ocorreu um erro, tente novamente.
                </div>
                <div class="form-group d-flex flex-row">
                    <div class="col-autos">
                        <div class="input-group">
                            <input type="email" name="email" value="" style="padding: 11px;color: #404040" id="email" autocomplete="off" class="form-control" placeholder="E-mail" required="true">
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Enviar" style="padding: 0px 25px" class="primary-btn primary">
                </div>
                <div id="recaptcha_ns" class="mensagem">
                    <div class="g-recaptcha" data-sitekey="6Le9py8UAAAAAOYVSjMRNFYSLCIIiPf-aCSzfFrf">
                        <div class="div-captcha">
                            <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le9py8UAAAAAOYVSjMRNFYSLCIIiPf-aCSzfFrf&amp;co=aHR0cDovL3d3dy5ub3ZhZnJpYnVyZ29hZ29yYS5jb20uYnI6ODA.&amp;hl=pt-BR&amp;v=zItNOfzbrqVGbb4QFYpPpcrw&amp;size=normal&amp;cb=yolm3fkgcqc0" width="304" height="78" role="presentation" name="a-x9qzurp8ec5u" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" required="" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div><iframe style="display: none;"></iframe>
                    </div>
                    <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR" async="" defer=""></script>
                </div>
            </form>
            <p>
                Você pode cancelar a inscrição a qualquer momento, caso queira.
            </p>
        </div>
    </div>

    <?php
    /*
                    $this->load->view('publicidades/banner-5');

                    $this->load->view('publicidades/banner-6');
                    */
    ?>
    <div class="single-sidebar-widget social-network-widget">
        <div class="mt-3 pt-1"></div>
        <ul class="social-list">
            <li id="li-facebook" class="d-flex justify-content-between align-items-center">
                <div class="icons d-flex flex-row align-items-center">
                    <img src="<?= base_url('assets/images/facebook.png') ?>">
                    <p>Facebook</p>
                </div>
                <a href="https://www.facebook.com/novafriburgoagora/" target="_blank">Curtir nossa página</a>
            </li>
            <li id="li-youtube" class="d-flex justify-content-between align-items-center">
                <div class="icons d-flex flex-row align-items-center">
                    <img src="<?= base_url('assets/images/youtube.png') ?>">
                    <p>Youtube</p>
                </div>
                <a href="https://www.youtube.com/channel/UCjwBSosHxbxZO6w_5far1XQ" target="_blank">Inscrever-se</a>
            </li>
            <li id="li-instagram" class="d-flex justify-content-between align-items-center">
                <div class="icons d-flex flex-row align-items-center">
                    <img src="<?= base_url('assets/images/instagram.png') ?>">
                    <p>Instagram</p>
                </div>
                <a href="https://www.instagram.com/novafriburgoagora/?hl=pt-br" target="_blank">Seguir</a>
            </li>
        </ul>
    </div>
    <!-- Anúncio 3 - 350x250 -->
    <?php
    //$this->load->view('publicidades/publicidade-3');

    ?>
    <script src="<?= base_url('assets/js/form_newsletter.min.js') ?>"></script>
    <script>
        setInterval(refreshIframe, 50000);

        function refreshIframe() {
            var frame = document.getElementById("estacao");
            frame.src = frame.src;
        }
    </script>
</div>
</div>
</div>
</section>
</div>