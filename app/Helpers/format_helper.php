<?php

if (!function_exists('format_data')) {

    /**
     * Format date from BR
     *
     * @param  string $date
     * 
     * @return string|bool
     */
    function format_data(string $date): string
    {
        if (!$date) return false;

        return date_format(date_create($date), "d/m/Y");
    }
}
