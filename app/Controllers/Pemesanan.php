<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pemesanan extends BaseController
{
    public function index()
    {
        echo view('comp/header');
        echo view('pesanan');
        echo view('comp/footer');
    }
}
