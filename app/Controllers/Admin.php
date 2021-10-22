<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\UsersModel;

class Admin extends BaseController
{
    
    public function index()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'categories' => 'required',
            'content' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $news = new NewsModel();

            $news->insert([
                "title" => $this->request->getPost('title'),
                "categories" => $this->request->getPost('categories'),
                "content" => $this->request->getPost('content'),
                "status" => "draft",
                "slug" => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            session()->setFlashdata('success', 'Berita / Acara Berhasil ditambahkan ke Draft!');
            return redirect('admin/posts');
        }

        echo view('Dashboard/home');
    }

    public function profile()
    {
        // ambil artikel yang akan diedit
        $users = new UsersModel();
        $data['users'] = $users->where('id', 1)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'motto' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $users->update(1, [
                "username" => $this->request->getPost('username'),
                "email" => $this->request->getPost('email'),
                "motto" => $this->request->getPost('motto'),
            ]);
            
            session()->setFlashdata('success', 'Data Admin Berhasil Dirubah!');
            return redirect('admin/profile');
        }

        echo view('Dashboard/Users/profile', $data);
    }

    public function passprofile()
    {

        // ambil artikel yang akan diedit
        $users = new UsersModel();
        $data['users'] = $users->where('id', 1)->first();

        $current_password = $this->request->getPost('old_password');
        $new_password = $this->request->getPost('new_password1');

        // lakukan validasi data password
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if(!password_verify($current_password, $data['users']['password']))
        {
            session()->setFlashdata('error', 'Password Lama yang anda masukan salah! Silahkan coba lagi.');
            return redirect()->to('admin/profile');
        } else {
            if($current_password == $new_password){
                session()->setFlashdata('error', 'Password Baru tidak boleh sama dengan Password Lama.');
                return redirect()->to('admin/profile');
            } else {
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                // jika data vlid, maka simpan ke database
                if($isDataValid){
                    $users->update(1, [
                        "password" => $password_hash,
                    ]);
                    session()->setFlashdata('success', 'Password Telah Berhasil Dirubah!');
                    return redirect('admin/profile');
                }
            }
        }

        echo view('Dashboard/Users/profile', $data);
    }

    public function photoprofile()
    {
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // ambil artikel yang akan diedit
        $users = new UsersModel();
        $data['users'] = $users->where('id', 1)->first();
        
        // jika data valid, maka simpan ke database
        if($isDataValid){
            $file =  $this->request->getFile('image');
            $randomName = $file->getRandomName();
            if ($file->isValid() && ! $file->hasMoved())
            {
                $file->move(ROOTPATH.'public/uploads/',$randomName);
            }

            $users->update(1, [
                "image" => $randomName,
            ]);

            session()->setFlashdata('success', 'Foto Profile Berhasil Dirubah!');
            return redirect('admin/profile');
        }

        // tampilkan form edit
        echo view('Dashboard/Users/profile', $data);
    }

    public function comment()
    {
        return view('Dashboard/comment');
    }

}
