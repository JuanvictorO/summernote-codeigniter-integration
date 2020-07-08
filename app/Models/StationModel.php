<?php

namespace App\Models;

use CodeIgniter\Model;

class StationModel extends Model
{

    protected $table = 'wx_data';

    public function selectStation()
    {
        $query = $this->select('temperature, date, time, barometer, daily_rainfall, monthly_rainfall, yearly_rainfall, rain_rate, outdoor_humidity, max_daily_temperature, min_daily_temperature')
            ->orderBy('date', 'desc')
            ->orderBy('time', 'desc')
            ->limit(1)
            ->get();

        return $query->getRow();
    }
}
