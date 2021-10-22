<?php

namespace App\Controllers\Admin;

use CodeIgniter\I18n\Time;
use App\Models\HistoryModel;
use App\Controllers\BaseController;

class History extends BaseController
{
    public function index()
    {
        // ambil artikel yang akan diedit
        $history = new HistoryModel();
        $data['history'] = $history->where('id', 1)->first();
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
            $history->update(1, [
                "content" => $this->request->getPost('content'),
                "updated_at" => $time,
            ]);

            session()->setFlashdata('success', 'Halaman Sejarah Berhasil Diperbaharui!');
            return redirect('admin/sejarah');
        }

        // tampilkan form edit
        echo view('Dashboard/history', $data);
    }
}
