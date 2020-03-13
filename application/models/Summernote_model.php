<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Summernote_model extends CI_Model
{
    /**
     * Undocumented function
     *
     * @param [type] $data
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
}
