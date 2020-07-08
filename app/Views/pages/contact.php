<div class="site-main-container">
    <section class="latest-post-area pb-20 m-0">
        <div class="col-lg-12 col-12">
            <div class="row">
                <div class="p-0 col-lg-8 col-12">
                    <!-- Início -->
                    <div style="margin-top: 5px" class="latest-post-wrap col-lg-12 p-15">
                        <a href="<?= base_url(); ?>">
                            <h1 class="border-arrodondada cat-title"><span class="lnr lnr-arrow-left"> </span>CONTATO</h1>
                        </a>
                        <div class="single-latest-post row">
                            <div class="col-lg-6">
                                <h5 class="p-15">Espaço dedicado à sugestões, críticas e elogios</h5>
                                <p class="p-15 text-black">
                                    Você também pode entrar em contato para divulgar seu evento na área “agenda” gratuitamente.
                                    <br>
                                    <br>
                                    Basta nos fornecer as imagens e informações detalhadas por email, que publicamos no nosso site*.
                                    <br>
                                    <br>
                                    <strong>contato@novafriburgoagora.com.br</strong>
                                    <br>
                                    <br>
                                    <i style="font-size: 13px;"><strong>*</strong>Na área “AGENDA” do site, não divulgamos nada que destaque partidos políticos ou empresas privadas.
                                        Anunciamos apenas as informações necessárias do evento como data, local, valor de ingresso, etc.
                                    </i>
                                </p>
                            </div>
                            <form action="<?= base_url('contato/enviar') ?>" id="form_contato" class="p-3 col-lg-6 form-area contact-form text-center" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="nome_contato" id="nome_contato" autocomplete="off" class="common-input mb-20 form-control" placeholder="Nome" required>
                                        <input type="email" name="email_contato" id="email_contato" autocomplete="off" class="common-input mb-20 form-control" placeholder="E-mail" required>
                                        <input type="text" name="assunto_contato" id="assunto_contato" autocomplete="off" class="common-input mb-20 form-control" placeholder="Assunto" required>
                                    </div>
                                    <div class="col-lg-12"><textarea name="texto_contato" cols="40" rows="5" id="texto_contato" autocomplete="off" class="common-textarea form-control" placeholder="Mensagem" required></textarea>
                                    </div>
                                    <div class="p-15 col-lg-12">
                                        <div class="g-recaptcha" data-sitekey="6Le9py8UAAAAAOYVSjMRNFYSLCIIiPf-aCSzfFrf">
                                            <div style="width: 304px; height: 78px;">
                                                <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le9py8UAAAAAOYVSjMRNFYSLCIIiPf-aCSzfFrf&amp;co=aHR0cDovL3d3dy5ub3ZhZnJpYnVyZ29hZ29yYS5jb20uYnI6ODA.&amp;hl=pt-BR&amp;v=-wV2EAWEOTlEtZh4vNQtn3H1&amp;size=normal&amp;cb=qaz0z44rhp2g" width="304" height="78" role="presentation" name="a-90hl4db9qcsq" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                </div>
                                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;></textarea>
                                            </div>
                                        </div>
                                        <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR" async="" defer=""></script><input type="submit" name="submit_contato" value="Enviar" style="float: left" class="primary-btn primary mt-2">
                                    </div>
                                </div>
                            </form>

                            <!--div class="alert alert-success" role="success"></div>
                            <div class="alert alert-danger" role="danger"></div-->
                        </div>
                    </div>

                </div>
                <!-- Anúncio 1 - 300x250 - Aparece apenas em celulares -->
                <!--div class="d-sm-none d-md-none d-xl-none pb-2">
                <div class="col-lg-12 row m-0 p-0 ml-1 ">
                    <?php
                    // $this->load->view('publicidades/publicidade-1');

                    //$this->load->view('publicidades/publicidade-7');
                    ?>
                </div>
            </div-->