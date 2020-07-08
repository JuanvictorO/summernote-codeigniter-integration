<div style="margin-top: -30px; margin-bottom: 20px;" class="p-15">
    <div class="single-sidebar-widget ads-widget">
        <?php
        $url = 'http://www.novafriburgoagora.com.br/imagens/lateral_direita/originais/' . fill_zeros($query->id_banner_lateral);
        ?>
        <p class="text-publicidade">PUBLICIDADE</p>
        <a href="<?= $query->link_banner_lateral ?>" target="_blank">
            <img class="img-fluid rounded mx-auto d-block p-1 pt-0" src="<?= $url . verificaExtencao($url) ?>" alt="Publicidade">
        </a>';
    </div>
</div>