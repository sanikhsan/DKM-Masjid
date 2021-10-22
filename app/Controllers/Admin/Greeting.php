<?php

namespace App\Controllers\Admin;

use CodeIgniter\I18n\Time;
use App\Models\GreetingModel;
use App\Controllers\BaseController;

class Greeting extends BaseController
{
    public function index()
    {
        // ambil artikel yang akan diedit
        $greet = new GreetingModel();
        $data['greet'] = $greet->where('id', 1)->first();
        $time = new Time('now', 'Asia/Jakarta');
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'content' => 'required',
            'tautan_youtube' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $greet->update(1, [
                "content" => $this->request->getPost('content'),
                "tautan_youtube" => $this->request->getPost('tautan_youtube'),
                "updated_at" => $time,
            ]);

            session()->setFlashdata('success', 'Halaman Sambutan Berhasil Diperbaharui!');
            return redirect('admin/sambutan');
        }

        // tampilkan form edit
        echo view('Dashboard/greeting', $data);
    }
}
