<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\ScheduleModel;

class Schedule extends BaseController
{
    public function index()
    {
        $this->data = [
            'title' => 'Nova Friburgo Agora | Câmeras ao vivo, previsão do tempo!',
            'description' => 'Nova Friburgo ao vivo, câmeras, clima em tempo real, previsão do tempo, notícias da cidade, agenda de eventos, entretenimento e lazer.'
        ];
        helper('html');

        $this->data['link'] = [
            link_tag('assets/css/home.min.css')
        ];

        $this->data['script'] = [];

        $eventos = new ScheduleModel();

        $query = $eventos->selectEventos();
        $this->data['eventos'] = $query;

        $query = $eventos->selectEventosPassados();
        $this->data['eventos_passados'] = $query;

        echo view('template/header', $this->data);

        echo view('pages/schedule');
        echo view('template/aside');

        echo view('template/footer');
    }

    public function details(int $id, string $title)
    {
        if ($id === null) {
            redirect()->back();
        } else {
            $this->data = [
                'title' => 'Nova Friburgo Agora | Câmeras ao vivo, previsão do tempo!',
                'description' => 'Nova Friburgo ao vivo, câmeras, clima em tempo real, previsão do tempo, notícias da cidade, agenda de eventos, entretenimento e lazer.'
            ];
            helper('html');

            $schedule = new ScheduleModel();
            $query = $schedule->getById($id);
            $this->data['schedule'] = $query;

            $query = $schedule->SelectAgenda(3);
            $this->data['schedules'] = $query;

            $news = new NewsModel();
            $query = $news->selectNews(3);
            $this->data['old_news'] = $query;

            echo view('template/header', $this->data);

            echo view('pages/schedule-details');
            echo view('template/aside');

            echo view('template/footer');
        }
    }
}
