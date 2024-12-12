<?php

namespace App\Controllers;

use App\Models\ClientModel;

class Home extends BaseController
{

    /**
     * Index Movie Data
     */
    public function index()
    {
        $data['title'] = "CLients from sgments";
        $ClientModel= new ClientModel();
        $data['clients'] = $ClientModel->findAll();
        $data['segments_data'] = $ClientModel->getClientCountBySegment();
        return view('home_index', $data);
    }

}