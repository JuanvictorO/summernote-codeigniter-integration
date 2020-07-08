<?php

namespace App\Controllers;

use App\Models\PublicityModel;

class Publicity extends BaseController
{
    public function show(int $position)
    {
        $publicity = new PublicityModel();
        $this->data['query'] = $publicity->selectPublicity($position);
        //echo view('components/publicity', $this->data);
        return 1;
    }

    public function banner(int $position): void
    {
        $publicity = new PublicityModel();
        $this->data['query'] = $publicity->selectPublicity($position);
        echo view('components/banner', $this->data);
    }
}
