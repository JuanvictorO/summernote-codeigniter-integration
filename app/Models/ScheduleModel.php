<?php

namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{

    protected $table = 'agenda_eventos';

    public function selectAgenda($limit): array
    {
        $query = $this->select('id_agenda_evento, titulo_evento, data_evento, local_evento')
            ->where('publicar', 1)
            ->where('data_fim_evento >=', date('Y-m-d'))
            ->where('data_fim_evento <=', date('Y-m-d H:i:s', strtotime("+6 months")))
            ->orderBy("id_agenda_evento", "RANDOM")
            ->orderBy('data_fim_evento', 'desc')
            ->limit($limit)
            ->get();

        return $query->getResult();
    }

    public function selectEventos(): array
    {
        $query = $this->select('id_agenda_evento, titulo_evento, data_evento, local_evento')
            ->where('publicar', 1)
            ->where('data_fim_evento >=', date('Y-m-d'))
            ->where('data_fim_evento <=', date('Y-m-d H:i:s', strtotime("+6 months")))
            ->orderBy('data_evento', 'asc')
            ->get();

        return $query->getResult();
    }

    public function selectEventosPassados(): array
    {
        $query = $this->select('id_agenda_evento, titulo_evento, data_evento, local_evento')
            ->where('publicar', 1)
            ->where('data_fim_evento <', date('Y-m-d'))
            ->where('data_fim_evento <', date('Y-m-d H:i:s', strtotime("+6 months")))
            ->orderBy('data_evento', 'desc')
            ->limit(4)
            ->get();

        return $query->getResult();
    }

    public function getById(int $id): object
    {
        $query = $this->select('*')
            ->where('publicar', 1)
            ->where('id_agenda_evento', $id)
            ->get();

        return $query->getRow();
    }
}
