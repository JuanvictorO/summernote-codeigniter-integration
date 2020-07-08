<?php

if (!function_exists('verificaEstacao')) {

    function verificaEstacao($data = NULL, $data_banco = NULL, $time_banco = NULL)
    {
        /*
        $time_banco -> 00:00:00
        $data_banco -> 2019-01-09
        $data       -> 2019-01-09 00:00:00
    */

        //Verifica se os três parametros foram passados
        if ($data && $data_banco && $time_banco) {

            //Separar a data e hora 2019-01-09 * 00:00:00
            $data_DATE         = explode(' ', $data);
            //Selecionar a data 2019-01-09
            $data_DATE         = $data_DATE[0];
            //Separar a data em ano/dia/mês 2019*01*09
            $data_DATE         = explode('-', $data_DATE);

            //Separar a data e hora 2019-01-09 * 00:00:00
            $data_HORA         = explode(' ', $data);
            //Selecionar a hora 
            $data_HORA         = $data_HORA[1];

            //Separar a data em ano/dia/mês
            $data_banco_ano    = explode('-', $data_banco);

            //Selecionar a hora em horas:minutos:segundos
            $data_banco_hora   = $time_banco;

            //Verifica validade do ano
            if ($data_banco_ano[0] < $data_DATE[0]) {
                return 0;
            } else {
                //Verifica validade do mês
                if ($data_banco_ano[1] < $data_DATE[1]) {
                    return 0;
                } else {
                    //Verifica validade do dia
                    if ($data_banco_ano[2] < $data_DATE[2]) {
                        return 0;
                    } else {
                        //Verifica validade das horas
                        if (converterHoraParaMinuto($data_banco_hora) + 30 < converterHoraParaMinuto($data_HORA)) {
                            return 0;
                        } else {
                            return 1;
                        }
                    }
                }
            }
        }
    }
}

if (!function_exists('intensidade')) {

    function intensidade($mmh = NULL)
    {
        if (is_numeric($mmh)) {
            if ($mmh == 0) {
                return 0;
            } else if ($mmh < 5) {
                return 1;
            } else if ($mmh >= 5 &&  $mmh < 25) {
                return 2;
            } else if ($mmh >= 25 &&  $mmh < 50) {
                return 3;
            } else if ($mmh >= 50) {
                return 4;
            }
        }
        //chuva fraca menor que 5,0 mm/h
        //chuva moderada entre 5,0 e 25 mm/h
        //chuva forte entre 25,1 e 50 mm/h
        //chuva muito forte maior que 50mm/h
    }
}

if (!function_exists('intensidadeText')) {

    function intensidadeText($mmh = NULL)
    {
        if (is_numeric($mmh)) {
            if ($mmh == 0) {
                return 'SEM CHUVA';
            } else if ($mmh < 5) {
                return 'FRACA';
            } else if ($mmh >= 5 &&  $mmh < 25) {
                return 'MODERADA';
            } else if ($mmh >= 25 &&  $mmh < 50) {
                return 'FORTE';
            } else if ($mmh >= 50) {
                return 'ALERTA';
            }
        }
        //chuva fraca menor que 5,0 mm/h
        //chuva moderada entre 5,0 e 25 mm/h
        //chuva forte entre 25,1 e 50 mm/h
        //chuva muito forte maior que 50mm/h
    }
}

if (!function_exists('converterBarometro')) {

    function converterBarometro($barometro = NULL)
    {
        //Funções para estação 
        $mmHg = 0.750096;
        if ($barometro) {
            $barometro = $barometro * $mmHg;
            return number_format($barometro, 1, ',', '.');
        }
    }
}

if (!function_exists('converterDia')) {
    function converterDia($data = NULL)
    {
        //Funções para estação 
        if ($data) {
            $data = explode('-', $data);
            return $data[2] . '/' . $data[1] . '/' . $data[0];
        }
    }
}

if (!function_exists('converterHoraParaMinuto')) {

    function converterHoraParaMinuto($hora = NULL)
    {
        //Funções para estação 
        if ($hora) {
            $hora = explode(':', $hora);
            return $hora[0] * 60 + $hora[1];
        }
    }
}

if (!function_exists('converterHora')) {

    function converterHora($hora = NULL)
    {
        //Funções para estação 
        if ($hora) {
            $hora = explode(':', $hora);
            return $hora[0] . ':' . $hora[1];
        }
    }
}
