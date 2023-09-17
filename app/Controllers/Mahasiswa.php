<?php

namespace App\Controllers;
use App\Models\Modelmahasiswa;

class Mahasiswa extends BaseController
{
    // function __construct()
    // {
    //     $this->model = new \App\Models\Modelmahasiswa();
    // }
 
    public function index()
    {
        $model = new Modelmahasiswa();
        $data['mahasiswa'] = $model->findAll();
        return view('mahasiswa/mahasiswa_view');
    }
}
