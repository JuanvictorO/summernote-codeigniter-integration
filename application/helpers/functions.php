<?php

/**
 * Função para setar a mensagem
 * 
 * @param string $id id da mensagem
 * @param string $msg conteudo da mensagem
 * @param enum[erro,sucesso,alerta]
 * @return string or boolean
 */
function set_notification($id, $msg, $tipo)
{
    /**
     * Instanciando o CI
     */
    $CI = &get_instance();

    $CI->session->set_flashdata($id, 'toastr["' . $tipo . '"]("' . $msg . '");');
}

/**
 * Função para pegar a mensagem na view
 * 
 * @param string $id valor setado para buscar a mensagem
 * @return string
 */
function get_notification($id)
{
    /**
     * Instancia o CI
     */
    $CI = &get_instance();

    /**
     * Busca se existe o flashdata
     */
    if ($CI->session->flashdata($id)) {
        echo $CI->session->flashdata($id);
    }
}

/**
 * Função para debugar código
 * 
 * @param array $array
 * @return void
 */
function debug($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    exit();
}

/**
 * Undocumented function
 *
 * @param string $date
 * @return string
 */
function convert_date($date = NULL)
{
    if ($date) {

        $date    = date_create($date);
        $date_formated = date_format($date, "d/m/Y \à\s H:i\h");

        return $date_formated;
    }
}
