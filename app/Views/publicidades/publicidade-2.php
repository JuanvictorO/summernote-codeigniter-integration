<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


?>


<div style="margin-top: -30px; margin-bottom: 20px;" class="p-15">
   <div class="single-sidebar-widget ads-widget">



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
      if ($publicidade_2) {

         $url = 'http://www.novafriburgoagora.com.br/imagens/lateral_direita/originais/' . fill_zeros($publicidade_2->id_banner_lateral) . '';


         echo '<p class="text-publicidade">PUBLICIDADE</p><a href="' . $publicidade_2->link_banner_lateral . '" target="_blank"><img class="img-fluid rounded mx-auto d-block p-1 pt-0" src="' . $url . verificaExtencao($url) . '" alt="Publicidade"></a>';



         unset($url);
      }


      ?>

   </div>
</div>