<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AddFilmM;
use App\Models\Admin\KatFilm;

class AddFilm extends BaseController
{
    public function index()
    {
        $model = new KatFilm();
        $data['list'] = $model->getKat();
        
        echo view('admin/comp/header');
        echo view('admin/comp/navbar');
        echo view('admin/comp/sidebar');
        echo view('admin/addfilm_vw', $data);
        echo view('admin/comp/footer');
    }


    public function tambahfilm(){

        $model = new AddFilmM();
        helper(['form', 'url']);
        
        $poster = $this->request->getFile('posternya');
        if($poster->move(ROOTPATH, 'public/admin/poster')){
            $model->insert([

                'id' => $this->request->getPost('id'),
                'judul' => $this->request->getPost('judul'),
                'foto' => $poster->getName(),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'id_kategori' => $this->request->getPost('kategori')
            ]);

            return redirect()->to('admin/addfilm_vw');
        } else {
            session()->setFlashdata('pesan', 'Data tidak tersimpan');
            return redirect()->to('admin/addfilm_vw');
        }
    }

}
