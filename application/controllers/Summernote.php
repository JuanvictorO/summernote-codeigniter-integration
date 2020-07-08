<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Summernote extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('summernoteModel');
    }

    /**
     * Chama a página add
     *
     * @return void
     */
    public function index()
    {
        $this->load->library('session');
        $this->load->view('add');
    }

    /**
     * Chama a página select
     *
     * @return void
     */
    public function listar()
    {
        $this->load->library('session');
        $data['result'] = $this->summernoteModel->select();

        $this->load->view('select', $data);
    }

    public function insert()
    {
        //Load session library to use Helper: functions_helper
        $this->load->library('session');
        // Load form validation library
        $this->load->library('form_validation');

        if ($this->validation()) {

            if ($this->summernoteModel->insert($this->input->post())) {
                // Set the message and redirect
                set_notification('notify', 'Adicionado com sucesso', 'success');
                redirect('');
            } else {
                // Set the message and redirect
                set_notification('notify', 'Ocorreu um erro ao adicionar', 'error');
                redirect('');
            }
        } else {
            // Set the message and redirect
            set_notification('notify', 'Ocorreu um erro ao adicionar', 'error');
            redirect('');
        }
    }

    /**
     * Atualiza dados da tabela
     *
     * @param array $data
     * @return bool
     */
    public function update()
    {
        //Load session library to use Helper: functions_helper
        $this->load->library('session');

        $id = $this->input->post('id');
        if (is_numeric($id) && !empty($id)) {

            if ($this->summernoteModel->update($this->input->post())) {
                set_notification('notify', 'A notícia foi atualizada com sucesso', 'success');
                redirect('summernote/listar');
            } else {
                // Set the message and redirect
                set_notification('notify', 'Ocorreu um erro ao atualizar a notícia', 'error');
                redirect('summernote/listar');
            }
        } else {
            return FALSE;
        }
    }

    public function validation()
    {
        // Check if there is a post type input
        if ($this->input->post()) {

            // Form validation rules
            $this->form_validation->set_rules('title', 'Título', 'required|max_length[100]');
            $this->form_validation->set_rules('text', 'Texto', 'required');
            if ($this->input->post('id')) {
                $this->form_validation->set_rules('id', 'Identificador', 'required|numeric');
            }
            // Check if the rules have been obeyed
            return $this->form_validation->run() ?: false;
        } else {
            return false;
        }
    }

    /**
     * Retorna o conteúdo com as imagens de uma notícia
     *
     * @param int $id
     * @return array|bool
     */
    public function getImgs($id)
    {
        if (!$this->input->is_ajax_request()) {
            return false;
        } else {
            if (is_numeric($id) && !empty($id)) {
                $row = $this->summernoteModel->selectImgs($id);
                echo json_encode($row);
            } else {
                return false;
            }
        }
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
     * Deleta todas as imagens passadas no vetor 'imgs'
     *
     * @return void
     */
    public function deleteOnCascade()
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
                        echo 'A imagem: ' . $vetor[$i] . ' foi excluída com sucesso! \n';
                    }
                }
            }
        }
    }

    /**
     * Deleta dados da tabela
     *
     * @param int $id
     * @return bool
     */
    public function delete($id = NULL)
    {
        //Load session library to use Helper: functions_helper
        $this->load->library('session');

        if (is_numeric($id) and !empty($id)) {
            if ($this->summernoteModel->delete($id)) {
                set_notification('notify', 'A Notícia foi excluída com sucesso', 'success');
                redirect('summernote/listar');
            } else {
                set_notification('notify', 'Ocorreu um erro ao excluir a notícia', 'error');
                redirect('summernote/listar');
            }
        } else {
            set_notification('notify', 'A notícia não foi identificada', 'error');
            redirect('summernote/listar');
        }
    }

    /**
     * Retorna um json com informações associadas ao id
     *
     * @param int $id
     * @return array|bool
     */
    public function ajax($id)
    {
        if (!$this->input->is_ajax_request()) {
            return FALSE;
        } else {
            if (is_numeric($id) && !empty($id)) {
                $row = $this->summernoteModel->select($id);
                echo json_encode($row);
            } else {
                return FALSE;
            }
        }
    }
}
