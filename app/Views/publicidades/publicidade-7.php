<div class="col-lg-6 col-md-6 col-sm-6 ads-banner centered text-center">

  <?php
  /*   
              [id_banner_lateral] => 134
                [descricao_banner_lateral] => ENERGISA TOPO 
                [data_inicio_banner_lateral] => 2019-01-01 00:00:00
                [data_fim_banner_lateral] => 2019-03-03 00:00:00
                [link_banner_lateral] => 
                [numero_acessos] => 0
                [posicao] => 1
                [publicar] => 0
            */
  if ($publicidade_7) {
    $url = 'http://www.novafriburgoagora.com.br/imagens/lateral_direita/originais/' . fill_zeros($publicidade_7->id_banner_lateral) . ''; // '.$url.verificaExtencao($url).'
    echo '<p class="text-publicidade">PUBLICIDADE</p><a href="' . $publicidade_7->link_banner_lateral . '" target="_blank"><img class="sombra-img img-fluid " style="width:95%" src="' . $url . '.gif" alt="' . $publicidade_7->descricao_banner_lateral . '"></a>';
    unset($url);
  }

  ?>
</div>