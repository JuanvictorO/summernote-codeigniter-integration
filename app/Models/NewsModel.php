<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{

    protected $table = 'noticias n';

    public function selectNews(int $limit): array
    {
        $query = $this->select('n.id_noticia, n.titulo_noticia, n.data_noticia, n.autor_noticia, n.descricao_noticia, nf.id_noticia_foto')
            ->join('noticias_fotos nf', 'n.id_noticia = nf.id_noticia', 'left')
            ->where('n.publicar', 1)
            ->orderBy("n.data_noticia", "desc")
            ->limit($limit)
            ->get();

        return $query->getResult();
    }

    public function fetchData(int $start, int $limit): array
    {
        $query = $this->select('n.id_noticia, n.titulo_noticia, n.data_noticia, n.autor_noticia, n.descricao_noticia, nf.id_noticia_foto')
            ->join('noticias_fotos nf', 'n.id_noticia = nf.id_noticia', 'left')
            ->where('n.publicar', 1)
            ->orderBy("n.data_noticia", "desc")
            ->limit($limit, $start)
            ->find();

        return ['data' => $query, 'count_filtered' => count($query)];
    }

    public function getById(int $id): object
    {
        $query = $this->select('n.id_noticia, n.titulo_noticia, n.data_noticia, n.autor_noticia, n.descricao_noticia, n.texto_noticia, nf.id_noticia_foto, nf.legenda')
            ->join('noticias_fotos nf', 'n.id_noticia = nf.id_noticia', 'left')
            ->where('n.publicar', 1)
            ->where('n.id_noticia', $id)
            ->get();

        return $query->getRow();
    }
}
