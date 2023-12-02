<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Auth;

class Login extends BaseController
{
    public function index()
    {
        echo view('login_vw');
    }


    public function masuk(){

        $model = new Auth();
        $sesi = session();

        $email = $this->request->getVar('email');
        $paswd = $this->request->getVar('paswd');
        $data = $model->where('email', $email)->first();
        if(!is_null($data)){
            $pass = $data['password'];
            if(password_verify($paswd, $pass)){
                $data['isLogin'] = true;
                $sesi->set($data);
                if($data['role_id'] == 1){
                    return redirect()->to(base_url('admin/dashboard'));
                } else{
                    return redirect()->to(base_url('Member/Dashboard'));
                }
            } else {
                echo "<script>Maaf , Username dan Password Salah</script>";
                return redirect()->to(base_url('Login'));
            }
        } else {
            echo "<script>Maaf , Username dan Password Salah</script>";
            return redirect()->to(base_url('Login'));
        } 
    }

    public function keluar(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
