<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicityModel extends Model
{

    protected $table = 'banners_laterais';

    public function selectPublicity(int $position): object
    {
        $query = $this->select('id_banner_lateral, link_banner_lateral')
            ->where('data_inicio_banner_lateral <=', date('Y-m-d H:m:s'))
            ->where('data_fim_banner_lateral >=', date('Y-m-d H:m:s'))
            ->where('posicao', $position)
            ->where('publicar', 0)
            ->limit(1)
            ->get();

        return $query->getRow();
    }
}
