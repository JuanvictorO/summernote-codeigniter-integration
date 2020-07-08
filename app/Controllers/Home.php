<?php

namespace App\Controllers;

use App\Models\ScheduleModel;
use App\Models\NewsModel;

class Home extends BaseController
{
	public function index()
	{
		helper(['html', 'url', 'text']);

		print_r($this->data['publicity']);
		exit();
		$this->data = [
			'title' => 'Nova Friburgo Agora | Câmeras ao vivo, previsão do tempo!',
			'description' => 'Nova Friburgo ao vivo, câmeras, clima em tempo real, previsão do tempo, notícias da cidade, agenda de eventos, entretenimento e lazer.'
		];

		$this->data['link'] = [
			link_tag('assets/css/contato.min.css')
		];

		$this->data['script'] = [
			script_tag('assets/js/camera.min.js')
		];

		$news = new NewsModel();
		$query = $news->selectNews(2);
		$this->data['news'] = $query;

		$agenda = new ScheduleModel();
		$query = $agenda->selectAgenda(2);
		$this->data['schedule'] = $query;

		echo view('template/header', $this->data);

		echo view('pages/home');

		echo view('template/aside');
		echo view('template/footer');
	}
}
