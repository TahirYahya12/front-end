<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Return_;

class Home extends BaseController
{

    public function index()
    {
        return view('index');
    }

    public function Konsultasi()
    {
        return view('konsultasi/h_gejala');
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
    public function login()
    {
        return view('admin/login.php');
    }
    public function penyakit2()
    {
        return view('admin/d_penyakit.php');
    }
    public function gejala()
    {
        return view('admin/d_gejala.php');
    }
    public function aturan()
    {
        return view('admin/d_aturan.php');
    }
    public function admin()
    {
        return view('admin/dasboard.php');
    }
    // public function coba()
    // {
    //     return view('pages/coba');
    // }
    public function tambahpenyakit()
    {
        return view('admin/Td_penyakit.php');
    }
    public function tambahgejala()
    {
        return view('admin/Td_gejala.php');
    }
    public function tambahaturan()
    {
        return view('admin/Td_aturan.php');
    }
}
