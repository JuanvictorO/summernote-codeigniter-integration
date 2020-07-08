<?php

namespace App\Controllers;

use App\Models\StationModel;

class Station extends BaseController
{
    public function index()
    {
        helper(['html', 'station']);

        $this->data = [
            'title' => 'Estação | Nova Friburgo Agora',
            'description' => 'Estação do Nova Friburgo Agora, fique ligado nas novidades.'
        ];

        $estacao = new StationModel();

        $query = $estacao->selectStation();
        $query->date_complet = '2019-09-06 00:10:00';
        $query->rain_rate = $query->rain_rate * 60;

        //Verifica se a estação está online
        if (verificaEstacao($query->date_complet, $query->date, $query->time) == 0) {

            echo link_tag('assets/css/bootstrap.min.css');
            echo view('components/station-off');
        } else {
            $this->data['estacao'] = $query;
            echo view('components/station', $this->data);
        }
    }

    /* public function formatStation($query)
    {
        helper('functions_helper');
        $query->rain_rate = 
    }*/
}
