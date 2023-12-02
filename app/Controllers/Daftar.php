<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Auth;

class Daftar extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Pendaftaran Cinema 1011';
        echo view('daftar_vw', $data);
    }


    public function mendaftar(){

        $model = new Auth();

        $model->insert([

            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('paswd'), PASSWORD_DEFAULT),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('notelp'),
            'role_id' => '2'
        ]);

        return redirect()->to(base_url('login'));

    }
}
