<?php

namespace App\Controllers\Admin;

use CodeIgniter\I18n\Time;
use App\Models\CommissionModel;
use App\Controllers\BaseController;

class Commission extends BaseController
{
    public function index()
    {
        // ambil artikel yang akan diedit
        $komisi = new CommissionModel();
        $data['komisi'] = $komisi->where('id', 1)->first();
        $time = new Time('now', 'Asia/Jakarta');
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'content' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $komisi->update(1, [
                "content" => $this->request->getPost('content'),
                "updated_at" => $time,
            ]);

            session()->setFlashdata('success', 'Halaman Komisi Berhasil Diperbaharui!');
            return redirect('admin/komisi');
        }

        // tampilkan form edit
        echo view('Dashboard/commission', $data);
    }
}
