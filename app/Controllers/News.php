<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\ScheduleModel;

class News extends BaseController
{
    public function index(): void
    {
        $this->data = [
            'title' => 'Nova Friburgo Agora | Câmeras ao vivo, previsão do tempo!',
            'description' => 'Nova Friburgo ao vivo, câmeras, clima em tempo real, previsão do tempo, notícias da cidade, agenda de eventos, entretenimento e lazer.'
        ];
        helper('html');

        $this->data['link'] = [
            link_tag('assets/css/home.min.css')
        ];

        $this->data['script'] = [
            script_tag('assets/js/fetchData.min.js')
        ];

        echo view('template/header', $this->data);

        echo view('pages/news');
        echo view('template/aside');

        echo view('template/footer');
    }

    public function fetch(): bool
    {
        if ($this->request->isAJAX()) {
            //Função a ser chamada pelo AJAX para carregamento contínuo	
            $news = new NewsModel();
            $output = '';
            $limit = $this->request->getPost('limit');
            $start = $this->request->getPost('start');
            $query  = $news->fetchData($start, $limit);
            $count = $query['count_filtered'];
            if ($count > 0) {
                foreach ($query['data'] as $row) {

                    $url_noticias = 'http://www.novafriburgoagora.com.br/imagens/noticias/thumbs/' . fill_zeros($row['id_noticia_foto']) . '_00000001.jpg';

                    if (file_exists($url_noticias) == 0) {
                        $url_noticias = 'http://novafriburgoagora.com.br/imagens/default.jpg';
                    }

                    $output .= '<div class="col-lg-4 col-sm-4 post-left p-15">
                                <div class="feature-img relative">
                                <a href="' . base_url('noticias/detalhes/' . $row['id_noticia'] . '/' . url_amigavel($row['titulo_noticia']) . '') . '.html">
                                <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="' . $url_noticias . '" title="' . $row['titulo_noticia'] . '" alt="' . $row['titulo_noticia'] . '">
                                </a>
                                </div>
                                </div>
                                
                                <div class="col-lg-8 col-sm-8">
                                <a href="' . base_url('noticias/detalhes/' . $row['id_noticia'] . '/' . url_amigavel($row['titulo_noticia']) . '') . '.html">
                                <h2 id="noticias-titulo">
                                ' . $row['titulo_noticia'] . '
                                </h2>
                                </a>
                                
                                <ul class="meta">
                                <li><span class="lnr lnr-calendar-full"></span>
                                ' . format_date_text($row['data_noticia']) . '
                                </li>
                                </ul>
                                <p id="limit-2-noticias">
                                ' . $row['descricao_noticia'] . '
                                </p>
                                </div>';
                }
            }
            echo $output;
            return true;
        } else {
            return false;
        }
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

            $news = new NewsModel();
            $query = $news->getById($id);
            $this->data['news'] = $query;

            $query = $news->selectNews(3);
            $this->data['old_news'] = $query;

            $schedule = new ScheduleModel();
            $query = $schedule->SelectAgenda(3);
            $this->data['schedule'] = $query;

            echo view('template/header', $this->data);

            echo view('pages/news-details');
            echo view('template/aside');

            echo view('template/footer');
        }
    }
}
