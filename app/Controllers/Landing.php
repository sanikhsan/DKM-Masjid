<?php

namespace App\Controllers;

use App\Models\CommissionModel;
use App\Models\GalleryModel;
use App\Models\GreetingModel;
use App\Models\HistoryModel;
use App\Models\JumatModel;
use App\Models\MemberModel;
use App\Models\NewsModel;
use App\Models\ScheduleModel;
use App\Models\SettingModel;
use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Landing extends BaseController
{
    public function index()
    {
        
        $users = new UsersModel();
        $data['users'] = $users->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
		$news = new NewsModel();
        $data['newses'] = $news->where('status', 'published')->orderBy('id', 'desc')->findAll(3);
        $gallery = new GalleryModel();
        $data['galleries'] = $gallery->orderBy('id', 'desc')->findAll(3);

        echo view('LandingPage/home', $data);
    }

    public function news()
    {
        // buat object model $news
		$news = new NewsModel();
        $data = [
            'newses' => $news->where('status', 'published')->orderBy('id', 'desc')->paginate(6, 'news'),
            'pager' => $news->pager,
        ];
        // $data['newses'] = $news->where('status', 'published')->orderBy('id', 'desc')->findAll();
        /*
         siapkan data untuk dikirim ke view dengan nama $newses
         dan isi datanya dengan news yang sudah terbit
        */
        $users = new UsersModel();
        $data['users'] = $users->where('id', 1)->first();
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();

        // kirim data ke view
        echo view('LandingPage/news', $data);
        // return view('LandingPage/news');
    }

    public function detail($slug)
    {
        $users = new UsersModel();
        $data['users'] = $users->where('id', 1)->first();
        $news = new NewsModel();
        $data['newses'] = $news->where('status', 'published')->orderBy('id', 'desc')->findAll();
		$data['news'] = $news->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();

        // tampilkan 404 error jika data tidak ditemukan
		if (!$data['news']) {
			throw PageNotFoundException::forPageNotFound();
		}
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();

        // kirim data ke view
        echo view('LandingPage/news_detail', $data);
    }

    public function gallery()
    {
        $gallery = new GalleryModel();
        $data = [
            'galleries' => $gallery->orderBy('id', 'desc')->paginate(6, 'galeri'),
            'pager' => $gallery->pager,
        ];
        // $data['galleries'] = $gallery->orderBy('id', 'desc')->findAll();
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();
        

        echo view('LandingPage/gallery', $data);
    }

    public function member()
    {
        $db = \Config\Database::connect();

        $data['anggotas'] = $db->query("SELECT * FROM anggota WHERE jabatan NOT IN ('ketua','wakil')");
        
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();
        $anggota = new MemberModel();
        $data['ketua'] = $anggota->where('jabatan', 'ketua')->first();
        $data['wakil'] = $anggota->where('jabatan', 'wakil')->first();
        // $data['anggotas'] = $anggota->whereNotIn('jabatan', 'wakil')->findAll();

        echo view('LandingPage/member', $data);
    }

    public function jumat()
    {
        $jumat = new JumatModel();
        $data = [
            'jumats' => $jumat->paginate(6, 'jumat'),
            'pager' => $jumat->pager,
        ];
        // $data['jumats'] = $jumat->findAll();
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();



        echo view('LandingPage/jumat-schedule', $data);
    }

    public function commission()
    {
        $komisi = new CommissionModel();
        $data['komisi'] = $komisi->where('id', 1)->first();
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();

        echo view('LandingPage/commission', $data);
    }

    public function greeting()
    {
        $greet = new GreetingModel();
        $data['greet'] = $greet->where('id', 1)->first();
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();

        echo view('LandingPage/greeting', $data);
    }

    public function history()
    {
        $history = new HistoryModel();
        $data['history'] = $history->where('id', 1)->first();
        $pengaturan = new SettingModel();
        $data['pengaturan'] = $pengaturan->where('id', 1)->first();
        $jadwal = new ScheduleModel();
        $data['jadwals'] = $jadwal->findAll();

        echo view('LandingPage/history', $data);
    }
}
