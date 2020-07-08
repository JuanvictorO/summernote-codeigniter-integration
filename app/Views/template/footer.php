</div>
<!-- SPAN que ao clica, faz a página subir ao topo -->
<a id="subirTopo"><span class="lnr lnr-chevron-up"></span></a>
<!----------- IMG ESTAÇÃO NO FINAL DA PÁGINA ----------------->
<img id="footer-img-template" class="p-0 m-0 col-lg-12 img-fluid" src="<?= base_url('assets/img/temas/footer-outono.png') ?>">
<!----------- CONECTADO VIA ALTAREDE DIV --------------------->
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 4%;cursor: pointer;line-height: 0;display:block !important;">
    <a title="Conectado via Altarede" target="_blank" href="http://www.altaredecorporate.com.br/">
        <img src="<?= base_url('assets/img/logos/via-altarede-logo.png') ?>" alt="www.altarede.com.br">
    </a>
</div>
<!-- Rodapé -->
<footer class="footer-area section-gap mt-0">
    <div class="container">
        <div class="footer-bottom row align-items-center">
            <p style="padding: 5px 25px" class="footer-text m-0 col-lg-8 col-md-12 col-10">
                Copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> Todos direitos reservados | Desenvolvido por:<a href="http://tamborafilmes.com.br" target="_blank"><img class="img-fluid p-0 m-0" src="<?php echo base_url('assets/img/tambora.png') ?>"></a>
            </p>
        </div>
    </div>
</footer>


</div>
</body>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-27438278-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-27438278-2');
</script>

<!-- SCRIPTS  -------------->
<script src="<?= base_url('assets/js/jquery-ui.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/menu-action.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/change-color-ao-vivo.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/action-up-top.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/main.min.js'); ?>"></script>
<?php
if (isset($script)) {
    foreach ($script as $row) :
        echo $row;
    endforeach;
}
?>

</html>