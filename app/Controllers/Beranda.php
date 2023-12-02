<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
    public function index()
    {
        echo view('comp/header');
        echo view('index');
        echo view('comp/footer');
    }


    
}
