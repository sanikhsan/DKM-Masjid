<?php

namespace App\Controllers\Admin;

use App\Models\GalleryModel;
use App\Controllers\BaseController;

class Gallery extends BaseController
{
    public function index()
    {
        $gallery = new GalleryModel();
        $data['galleries'] = $gallery->findAll();
		echo view('Dashboard/Gallery/index', $data);
    }

	//--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'content' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $gallery = new GalleryModel();

            $file =  $this->request->getFile('image');
            $randomName = $file->getRandomName();
            if ($file->isValid() && ! $file->hasMoved())
            {
                $file->move(ROOTPATH.'public/uploads/',$randomName);
            }

            $gallery->insert([
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "image" => $randomName,
            ]);

            session()->setFlashdata('success', 'Berhasil Menambahkan Gambar ke Gallery!');
            return redirect('admin/galeri');
        }
		
        // tampilkan form create
        echo view('Dashboard/Gallery/gallery_add');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $gallery = new GalleryModel();
        $data['gallery'] = $gallery->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $gallery->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
            ]);

            session()->setFlashdata('success', 'Data Galeri Berhasil Diperbaharui!');
            return redirect('admin/galeri');
        }

        // tampilkan form edit
        echo view('Dashboard/Gallery/gallery_edit', $data);
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
        $gallery = new GalleryModel();
        $data['gallery'] = $gallery->where('id', $id)->first();
        
        // jika data valid, maka simpan ke database
        if($isDataValid){
            $file =  $this->request->getFile('image');
            $randomName = $file->getRandomName();
            if ($file->isValid() && ! $file->hasMoved())
            {
                $file->move(ROOTPATH.'public/uploads/',$randomName);
            }

            $gallery->update($id, [
                "image" => $randomName,
            ]);

            session()->setFlashdata('success', 'Foto Galeri Berhasil Diperbaharui!');
            return redirect('admin/galeri');
        }

        // tampilkan form edit
        echo view('Dashboard/Gallery/gallery_edit', $data);
    }

	//--------------------------------------------------------------------------

	public function delete($id){
        $gallery = new GalleryModel();
        $gallery->delete($id);

        session()->setFlashdata('success', 'Berhasil Menghapus Gambar ke Gallery!');
        return redirect('admin/galeri');
    }
}
