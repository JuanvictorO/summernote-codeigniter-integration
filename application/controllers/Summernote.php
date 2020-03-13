<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Summernote extends CI_Controller
{
    /**
     * Chama a página add.php
     *
     * @return void
     */
    public function index()
    {
        $this->load->view('add');
    }

    /**
     * Adiciona uma imagem a pasta uploads
     *
     * @return string
     */
    public function uploadFile()
    {
        if (!$this->input->is_ajax_request()) {
            return false;
        } else {
            if ($_FILES['file']['name']) {
                // Set config for the library upload
                $config = array(
                    'encrypt_name' => TRUE,
                    'upload_path' => './assets/uploads',
                    'allowed_types' => 'png|jpg',
                    'max_size' => '1500'
                );

                // Load upload library
                $this->load->library('upload', $config);

                // Verify configs
                if ($this->upload->do_upload('file')) {
                    $img_info = $this->upload->data();
                    $url = base_url('assets/uploads/') . $img_info['file_name'];

                    $json = array(
                        'error' => 0,
                        'message' => $url
                    );

                    echo json_encode($json);
                } else {
                    $json = array(
                        'error' => 1,
                        'message' => $this->upload->display_errors('<p class="mb-0">', '</p>')
                    );

                    echo json_encode($json);
                }
            }
        }
    }

    /**
     * Deleta uma imagem da pasta uploads
     *
     * @return void
     */
    public function deleteFile()
    {
        if (!$this->input->is_ajax_request()) {
            return false;
        } else {
            if ($this->input->post('src') != '') {
                $url = explode("uploads/", $this->input->post('src'));
                unlink("./assets/uploads/" . $url[1]);
                echo 'A imagem foi excluída com sucesso!';
            } else {
                echo 'A imagem não foi passada';
            }
        }
    }

    /**
     * Deleta uma imagem da pasta uploads quando a página é atualizada ou fechada
     *
     * @return void
     */
    public function deleteFileBeforeUnload()
    {
        if (!$this->input->is_ajax_request()) {
            return false;
        } else {
            $vetor = json_decode($this->input->post('imgs'));

            for ($i = 0; $i < count($vetor); $i++) {
                if (!empty($vetor[$i])) {
                    $path = "./assets/uploads/" . $vetor[$i];
                    if (file_exists($path) == 1) {
                        unlink("./assets/uploads/" . $vetor[$i]);
                        echo 'A imagem: ' . $vetor[$i] . ' foi excluída com sucesso!';
                    }
                }
            }
        }
    }
}
