<?php

namespace App\Controllers\Admin;

use App\Models\MemberModel;
use App\Controllers\BaseController;

class Members extends BaseController
{
    public function index()
    {
        $anggota = new MemberModel();
        $data['anggotas'] = $anggota->findAll();
		echo view('Dashboard/Member/index', $data);
    }

	//--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'jabatan' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $anggota = new MemberModel();

            $file =  $this->request->getFile('image');
            $randomName = $file->getRandomName();
            if ($file->isValid() && ! $file->hasMoved())
            {
                $file->move(ROOTPATH.'public/uploads/',$randomName);
            }

            $anggota->insert([
                "nama" => $this->request->getPost('nama'),
                "jabatan" => $this->request->getPost('jabatan'),
                "image" => $randomName,
            ]);

            session()->setFlashdata('success', 'Berhasil Menambahkan Data Anggota!');
            return redirect('admin/keanggotaan');
        }
		
        // tampilkan form create
        echo view('Dashboard/member/member_add');
    }

	//--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $anggota = new MemberModel();
        $data['anggota'] = $anggota->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama' => 'required',
            'jabatan' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $anggota->update($id, [
                "nama" => $this->request->getPost('nama'),
                "jabatan" => $this->request->getPost('jabatan'),
                "status" => $this->request->getPost('status')
            ]);

            session()->setFlashdata('success', 'Data Anggota Berhasil Diperbaharui!');
            return redirect('admin/keanggotaan');
        }

        // tampilkan form edit
        echo view('Dashboard/member/member_edit', $data);
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
        $anggota = new MemberModel();
        $data['anggota'] = $anggota->where('id', $id)->first();
        
        // jika data valid, maka simpan ke database
        if($isDataValid){
            $file =  $this->request->getFile('image');
            $randomName = $file->getRandomName();
            if ($file->isValid() && ! $file->hasMoved())
            {
                $file->move(ROOTPATH.'public/uploads/',$randomName);
            }

            $anggota->update($id, [
                "image" => $randomName,
            ]);

            session()->setFlashdata('success', 'Foto Anggota Berhasil Diperbaharui!');
            return redirect('admin/keanggotaan');
        }

        // tampilkan form edit
        echo view('Dashboard/member/member_edit', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $anggota = new MemberModel();
        $anggota->delete($id);

        session()->setFlashdata('success', 'Data Anggota Berhasil Dihapus!');
        return redirect('admin/keanggotaan');
    }
}
