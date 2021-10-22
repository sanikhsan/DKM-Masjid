<?php

namespace App\Controllers\Admin;

use App\Models\NewsModel;
use App\Controllers\BaseController;

class News extends BaseController
{
    public function index()
    {
        $news = new NewsModel();
        $data['newses'] = $news->findAll();
		echo view('Dashboard/Post/index', $data);
    }

	//--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $news = new NewsModel();

            $file =  $this->request->getFile('image');
            $randomName = $file->getRandomName();
            if ($file->isValid() && ! $file->hasMoved())
            {
                $file->move(ROOTPATH.'public/uploads/',$randomName);
            }

            $news->insert([
                "title" => $this->request->getPost('title'),
                "categories" => $this->request->getPost('categories'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('title'), '-', TRUE),
                "image" => $randomName,
            ]);

            session()->setFlashdata('success', 'Berhasil Menambahkan Artikel Berita / Acara!');
            return redirect('admin/posts');
        }
		
        // tampilkan form create
        echo view('Dashboard/Post/post_add');
    }

	//--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $news->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status')
            ]);

            session()->setFlashdata('success', 'Berhasil Memperbaharui Artikel Berita / Acara!');
            return redirect('admin/posts');
        }

        // tampilkan form edit
        echo view('Dashboard/Post/post_edit', $data);
    }

    //--------------------------------------------------------------------------

    public function imagedit($id)
    {
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // ambil artikel yang akan diedit
        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();
        
        // jika data valid, maka simpan ke database
        if($isDataValid){
            $file =  $this->request->getFile('image');
            $randomName = $file->getRandomName();
            if ($file->isValid() && ! $file->hasMoved())
            {
                $file->move(ROOTPATH.'public/uploads/',$randomName);
            }

            $news->update($id, [
                "image" => $randomName,
            ]);

            session()->setFlashdata('success', 'Berhasil Memperbaharui Gambar Artikel Berita / Acara!');
            return redirect('admin/posts');
        }

        // tampilkan form edit
        echo view('Dashboard/Post/post_edit', $data);
    }

	//--------------------------------------------------------------------------

	public function delete($id){
        $news = new NewsModel();
        $news->delete($id);

        session()->setFlashdata('success', 'Berhasil Menghapus Artikel Berita / Acara!');
        return redirect('admin/posts');
    }
}
