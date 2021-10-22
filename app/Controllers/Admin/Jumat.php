<?php

namespace App\Controllers\Admin;

use App\Models\JumatModel;
use App\Controllers\BaseController;

class Jumat extends BaseController
{
    public function index()
    {
        $jumat = new JumatModel();
        $data['jumats'] = $jumat->findAll();
		echo view('Dashboard/Jumat/index', $data);
    }

	//--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['imam' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $jumat = new JumatModel();

            $jumat->insert([
                "tanggal" => $this->request->getPost('tanggal'),
                "imam" => $this->request->getPost('imam'),
                "khatib" => $this->request->getPost('khatib'),
                "muadzin" => $this->request->getPost('muadzin'),
                "bilal" => $this->request->getPost('bilal'),
            ]);

            session()->setFlashdata('success', 'Berhasil Menambah Jadwal Pengurus Shalat Jumat!');
            return redirect('admin/jumat');
        }
		
        // tampilkan form create
        echo view('Dashboard/Jumat/jumat_add');
    }

	//--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $jumat = new JumatModel();
        $data['jumat'] = $jumat->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'imam' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $jumat->update($id, [
                "tanggal" => $this->request->getPost('tanggal'),
                "imam" => $this->request->getPost('imam'),
                "khatib" => $this->request->getPost('khatib'),
                "muadzin" => $this->request->getPost('muadzin'),
                "bilal" => $this->request->getPost('bilal'),
            ]);

            session()->setFlashdata('success', 'Berhasil Memperbaharui Jadwal Pengurus Shalat Jumat!');
            return redirect('admin/jumat');
        }

        // tampilkan form edit
        echo view('Dashboard/Jumat/jumat_edit', $data);
    }

	//--------------------------------------------------------------------------

	public function delete($id){
        $jumat = new JumatModel();
        $jumat->delete($id);

        session()->setFlashdata('success', 'Berhasil Menghapus Jadwal Pengurus Shalat Jumat!');
        return redirect('admin/jumat');
    }
}
