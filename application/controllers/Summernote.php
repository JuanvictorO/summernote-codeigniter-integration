<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Summernote extends CI_Controller
{
    public function index()
    {
        $this->load->view('add');
    }
    public function uploadFile()
    {
        if (!$this->input->is_ajax_request()) {
            return false;
        } else {
            if ($_FILES) {
                // Set config for the library upload
                $config = array(
                    'encrypt_name' => TRUE,
                    'upload_path' => './assets/uploads',
                    'allowed_types' => 'png|jpg',
                    'max_size' => '3000'
                );

                // Load upload library
                $this->load->library('upload', $config);

                // Verify configs
                if ($this->upload->do_upload('img')) {
                    $img_info = $this->upload->data();
                    $url = base_url('assets/uploads/').$img_info['file_name'];
                    return $url;
                } else {
                    return false;
                }
        }
    }
}
