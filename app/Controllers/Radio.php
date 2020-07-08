<?php

namespace App\Controllers;

class Radio extends BaseController
{
    public function index()
    {
        $this->data = [
            'title' => 'Nova Friburgo Agora | Câmeras ao vivo, previsão do tempo!',
            'description' => 'Nova Friburgo ao vivo, câmeras, clima em tempo real, previsão do tempo, notícias da cidade, agenda de eventos, entretenimento e lazer.'
        ];
        helper('html');

        $this->data['link'] = [
            link_tag('assets/css/radio.min.css')
        ];

        $this->data['script'] = [
            script_tag('assets/js/camera-radio.min.js')
        ];

        echo view('template/header', $this->data);

        echo view('pages/radio');

        echo view('template/footer');
    }
}
