<div class="site-main-container">
    <section class="latest-post-area pb-20 m-0">
        <div class="col-lg-12 col-12">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Início notícias -->
                    <div style="margin-top: 5px" class=" latest-post-wrap col-lg-12">
                        <a href="<?= base_url(); ?>">
                            <h1 class="border-arrodondada cat-title"><span class="lnr lnr-arrow-left"> </span>Notícias</h1>
                        </a>
                        <div class="single-latest-post row align-items-center">
                            <div class="single-latest-post row align-items-center p-15 pt-0 my-0" id="load_data"></div>
                        </div>
                        <div id="load_data_message"></div>
                        <div class="col text-center">
                            <button style="font-size: 1.5em" id="ver-mais" class="btn btn-secondary">Carregar mais</button>
                        </div>
                    </div>
                    <!-- Anúncio 1 - 300x250 - Aparece apenas em celulares -->
                    <div style="margin-top: -10%" class="d-sm-none d-md-none d-xl-none pb-2">
                        <div class="col-lg-12 row m-0 p-0 ml-1 ">
                            <?php
                            //$this->load->view('publicidades/publicidade-1');

                            //$this->load->view('publicidades/publicidade-7');
                            ?>
                        </div>
                    </div>
                </div>