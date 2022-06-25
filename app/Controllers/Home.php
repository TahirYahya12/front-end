<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\PenyakitModel;

class Home extends BaseController
{
    protected $gejalaModel;
    public function __construct()
    {
        $this->gejalaModel = new GejalaModel();
        $this->penyakitModel = new PenyakitModel();
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
        return view('gejala/h_gejala', $data);
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
}
