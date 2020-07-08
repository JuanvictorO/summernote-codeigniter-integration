<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {

        helper('html');

        $this->data = [
            'title' => 'Nova Friburgo Agora | Câmeras ao vivo, previsão do tempo!',
            'description' => 'Nova Friburgo ao vivo, câmeras, clima em tempo real, previsão do tempo, notícias da cidade, agenda de eventos, entretenimento e lazer.'
        ];

        $this->data['link'] = [
            link_tag('assets/css/contato.min.css')
        ];

        echo view('template/header', $this->data);

        echo view('pages/contact');
        echo view('template/aside');

        echo view('template/footer');
    }
}
