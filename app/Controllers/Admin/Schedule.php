<?php

namespace App\Controllers\Admin;

use CodeIgniter\I18n\Time;
use App\Models\ScheduleModel;
use App\Controllers\BaseController;

class Schedule extends BaseController
{
    public function index()
    {
        // ambil artikel yang akan diedit
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();

        // tampilkan form edit
        echo view('Dashboard/jadwal/index', $data);
    }

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $jadwal = new ScheduleModel();
        $data['jadwal'] = $jadwal->where('id', $id)->first();
        $time = new Time('now', 'Asia/Jakarta');

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama' => 'required',
            'waktu' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $jadwal->update($id, [
                "nama" => $this->request->getPost('nama'),
                "waktu" => $this->request->getPost('waktu'),
                "updated_at" => $time,
            ]);

            session()->setFlashdata('success', 'Jadwal Shalat Berhasil Diperbaharui!');
            return redirect('admin/jadwal');
        }
        echo view('Dashboard/jadwal/schedule_edit', $data);
    }
}
