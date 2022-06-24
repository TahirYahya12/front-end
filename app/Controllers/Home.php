<?php

namespace App\Controllers;

use App\Models\GejalaModel;

class Home extends BaseController
{
    protected $gejalaModel;

    public function __construct()
    {
        $this->gejalaModel = new GejalaModel();
    }

    public function index()
    {
        return view('index');
    }

    public function konsultasi()
    {
        $data = [
            'gejala' => $this->gejalaModel->getGejala()
        ];
        return view('konsultasi/h_gejala', $data);
    }

    public function tanaman()
    {
        return view('pages/h_tanaman');
    }

    public function penyakit()
    {
        return view('pages/h_hamadanpenyakit');
    }

    public function bantuan()
    {
        return view('pages/h_bantuan');
    }

    public function tentang()
    {
        return view('pages/h_tentang');
    }

    public function hasil()
    {
        return view('pages/h_hasil');
    }
    public function lagi()
    {
        return view('pages/h_gejala');
    }




    // 
    // public function login()
    // {
    //     return view('admin/login.php');
    // }
    // public function penyakit2()
    // {
    //     return view('admin/d_penyakit.php');
    // }
    // public function gejala()
    // {
    //     return view('admin/d_gejala.php');
    // }
    // public function aturan()
    // {
    //     return view('admin/d_aturan.php');
    // }
    // public function admin()
    // {
    //     return view('admin/dasboard.php');
    // }
    // public function tambahpenyakit()
    // {
    //     return view('admin/Td_penyakit.php');
    // }
    // public function tambahgejala()
    // {
    //     return view('admin/Td_gejala.php');
    // }
    // public function tambahaturan()
    // {
    //     return view('admin/Td_aturan.php');
    // }
}
