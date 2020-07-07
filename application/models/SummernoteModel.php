<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SummernoteModel extends CI_Model
{
    /**
     * Adiciona na tabela table
     *
     * @param array $data
     * @return bool
     */
    public function insert($data)
    {
        $this->load->database();

        $row = array(
            'title' => $data['title'],
            'text' => $data['text'],
            'update_date' => date('Y-m-d H:i:s')
        );

        return $this->db->insert('table', $row) ?: false;
    }

    /**
     * Recebe dados da tabela baseados, ou não, no ID
     *
     * @param int|null $id
     * @return array
     */
    public function select($id = NULL)
    {
        $this->load->database();
        if ($id) {
            $query = $this->db->select('id,title, text, update_date')
                ->from('table')
                ->where('id', $id)
                ->get()->row();
        } else {
            $query = $this->db->select('id,title,update_date')
                ->from('table')
                ->order_by('id', 'desc')
                ->get()->result();
        }

        return $query;
    }
}
