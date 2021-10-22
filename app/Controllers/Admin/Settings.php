<?php

namespace App\Controllers\Admin;

use CodeIgniter\I18n\Time;
use App\Models\SettingModel;
use App\Controllers\BaseController;

class Settings extends BaseController
{
    public function index()
    {
        // ambil artikel yang akan diedit
        $settings = new SettingModel();
        $data['settings'] = $settings->where('id', 1)->first();
        $time = new Time('now', 'Asia/Jakarta');
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama_web' => 'required',
            'deskripsi_web' => 'required',
            'keyword_web' => 'required',
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $settings->update(1, [
                "nama_web" => $this->request->getPost('nama_web'),
                "deskripsi_web" => $this->request->getPost('deskripsi_web'),
                "keyword_web" => $this->request->getPost('keyword_web'),
                "email" => $this->request->getPost('email'),
                "telepon" => $this->request->getPost('telepon'),
                "alamat" => $this->request->getPost('alamat'),
                "twitter" => $this->request->getPost('twitter'),
                "facebook" => $this->request->getPost('facebook'),
                "youtube" => $this->request->getPost('youtube'),
                "linkedin" => $this->request->getPost('linkedin'),
                "instagram" => $this->request->getPost('instagram'),
                "updated_at" => $time,
            ]);

            session()->setFlashdata('success', 'Pengaturan Website Berhasil Dirubah!');
            return redirect('admin/pengaturan');
        }

        // tampilkan form edit
        echo view('Dashboard/settings', $data);
    }
}
