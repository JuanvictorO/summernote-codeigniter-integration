<?php

namespace App\Libraries;

use App\Models\PublicityModel;

class Publicity
{
    /**
     * Array com informações do banner
     * 
     * @var array
     * 
     */
    protected $data;

    /**
     * Instance of publicity model 
     * 
     * @var \App\Models\PublicityModel
     * 
     */
    protected $model;

    public function show(int $position)
    {
        $this->model = new PublicityModel();
        $this->data['query'] = $this->model->selectPublicity($position);
        echo view('components/publicity', $this->data);
        return 1;
    }
}
