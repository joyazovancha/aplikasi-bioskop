<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {

        $sesi = session();
        $data['nama'] = $sesi->get('nama');
        $sesi->set($data);
        
        echo view('admin/comp/header');
        echo view('admin/comp/navbar');
        echo view('admin/comp/sidebar', $data);
        echo view('admin/dash_vw');
        echo view('admin/comp/footer');
    }
}
