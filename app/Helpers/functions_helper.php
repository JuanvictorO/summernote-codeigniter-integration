<?php

if (!function_exists('format_date_text')) {

    function format_date_text($data = NULL)
    {
        /*
        Converter:
        FORMATO BANCO -> 2019-01-09 00:00:00
        FORMATO FINAL -> 09 de janeiro de 2019
    */
        if ($data) {
            $data_time    = explode(' ', $data);
            $data_funcao  = $data_time[0];
            $data_numeros = explode('-', $data_funcao);
            switch ($data_numeros[1]) {
                case '01':
                    $data_nome = 'janeiro';
                    break;

                case '02':
                    $data_nome = 'fevereiro';
                    break;

                case '03':
                    $data_nome = 'março';
                    break;

                case '04':
                    $data_nome = 'abril';
                    break;

                case '05':
                    $data_nome = 'maio';
                    break;

                case '06':
                    $data_nome = 'junho';
                    break;

                case '07':
                    $data_nome = 'julho';
                    break;

                case '08':
                    $data_nome = 'agosto';
                    break;

                case '09':
                    $data_nome = 'setembro';
                    break;

                case '10':
                    $data_nome = 'outubro';
                    break;

                case '11':
                    $data_nome = 'novembro';
                    break;

                case '12':
                    $data_nome = 'dezembro';
                    break;

                default:
                    $data_nome = 'ERRO';
                    break;
            }

            return $data_final = $data_numeros[2] . ' de ' . $data_nome . ' de ' . $data_numeros[0];
        }
    }
}

if (!function_exists('format_date_hour')) {

    function format_date_hour($data = NULL)
    {
        if ($data) {
            $data_time    = explode(' ', $data);
            $data_numeros = explode(':', $data_time[1]);

            return $data_numeros[0] . ':' . $data_numeros[1];
        }
    }
}

if (!function_exists('fill_zeros')) {

    function fill_zeros($id = NULL)
    {
        //Preenche zeros para puxar imagens do banco de dados
        if ($id) {
            $id_preenchido = str_pad($id, 8, '0', STR_PAD_LEFT);
            return $id_preenchido;
        }
    }
}

if (!function_exists('url_amigavel')) {

    function url_amigavel($str = NULL)
    {
        //Retira os espaços e acentos para transformar em uma URL limpa
        if ($str) {
            $a   = array(
                'à',
                'á',
                'â',
                'ã',
                'ä',
                'å',
                'ç',
                'è',
                'é',
                'ê',
                'ë',
                'ì',
                'í',
                'î',
                'ï',
                'ñ',
                'ò',
                'ó',
                'ô',
                'õ',
                'ö',
                'ù',
                'ü',
                'ú',
                'ÿ',
                'À',
                'Á',
                'Â',
                'Ã',
                'Ä',
                'Å',
                'Ç',
                'È',
                'É',
                'Ê',
                'Ë',
                'Ì',
                'Í',
                'Î',
                'Ï',
                'Ñ',
                'Ò',
                'Ó',
                'Ô',
                'Õ',
                'Ö',
                'O',
                'Ù',
                'Ü',
                'Ú',
                'Ÿ',
                '!',
                '?',
                '@',
                '#',
                '$',
                '%',
                '&',
                '*',
                '.',
                ',',
                '(',
                ')',
                '_',
                '<',
                '>',
                '=',
                '\\',
                '/',
                '|',
                '[',
                ']',
                '{',
                '}',
                'ª',
                'º',
                '¹',
                '²',
                '³',
                '£',
                '¢',
                '¬',
                '§',
                '"',
                "'",
                ';',
                ':'
            );
            $b   = array(
                'a',
                'a',
                'a',
                'a',
                'a',
                'a',
                'c',
                'e',
                'e',
                'e',
                'e',
                'i',
                'i',
                'i',
                'i',
                'n',
                'o',
                'o',
                'o',
                'o',
                'o',
                'u',
                'u',
                'u',
                'y',
                'A',
                'A',
                'A',
                'A',
                'A',
                'A',
                'C',
                'E',
                'E',
                'E',
                'E',
                'I',
                'I',
                'I',
                'I',
                'N',
                'O',
                'O',
                'O',
                'O',
                'O',
                'O',
                'U',
                'U',
                'U',
                'Y',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                '  ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' '
            );
            $str = str_replace($a, $b, $str); //substitui letras acentuadas por "normais"
            $str = strtolower($str);
            $str = preg_replace("/( +)/", " ", $str);
            $str = str_replace(" ", "-", $str);
            $str = str_replace('-----------------', '-', $str);
            $str = str_replace('----------------', '-', $str);
            $str = str_replace('---------------', '-', $str);
            $str = str_replace('--------------', '-', $str);
            $str = str_replace('-------------', '-', $str);
            $str = str_replace('------------', '-', $str);
            $str = str_replace('-----------', '-', $str);
            $str = str_replace('----------', '-', $str);
            $str = str_replace('---------', '-', $str);
            $str = str_replace('--------', '-', $str);
            $str = str_replace('-------', '-', $str);
            $str = str_replace('------', '-', $str);
            $str = str_replace('-----', '-', $str);
            $str = str_replace('----', '-', $str);
            $str = str_replace('---', '-', $str);
            $str = str_replace('--', '-', $str);
            if (substr($str, -1) == '-') {
                $str = substr($str, 0, -1);
            }

            return $str;
        }
    }
}

if (!function_exists('verificaExtencao')) {

    function verificaExtencao($url = NULL)
    {
        //Verifica e da suporte a extenção .gif ou .jpg nas publicidades
        if ($url) {
            $extencoes = array(
                0 => '.jpg',
                1 => '.gif'
            );

            for ($i = 0; $i < 2; $i++) {

                if (@exif_imagetype($url . $extencoes[$i]) == IMAGETYPE_JPEG) {
                    return $extencoes[$i];
                } elseif (@exif_imagetype($url . $extencoes[$i]) == IMAGETYPE_GIF) {
                    return $extencoes[$i];
                }
            }
        }
    }
}
