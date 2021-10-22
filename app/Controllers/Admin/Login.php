<?php

namespace App\Controllers\Admin;

use App\Models\UsersModel;
use App\Controllers\BaseController;

class Login extends BaseController
{

    public function index()
    {
        echo view('Dashboard/Users/login');
    }

    public function proses()
    {
        $session = session();

        $users = new UsersModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = $users->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'motto' => $data['motto'],
                    'email' => $data['email'],
                    'username' => $data['username'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect('admin/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password yang anda masukan salah.');
                return redirect('admin/login');
            }

        }else{
            $session->setFlashdata('msg', 'Email yang anda masukan tidak ada.');
            return redirect('admin/login');
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('admin/login');
    }
}
