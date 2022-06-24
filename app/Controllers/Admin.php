<?php

namespace App\Controllers;

use App\Models\GejalaModel;

class Admin extends BaseController
{
    protected $gejalaModel;

    public function __construct()
    {
        $this->gejalaModel = new GejalaModel();
    }

    public function index()
    {
        return view('admin/dasboard.php');
    }



    // gejala
    public function gejala()
    {
        $data = [
            'gejala' => $this->gejalaModel->getGejala()
        ];
        return view('admin/d_gejala.php', $data);
    }
    public function tambahgejala()
    {
        return view('admin/Td_gejala.php');
    }


    // penyakit
    public function penyakit()
    {
        $data = [
            'penyakit' => $this->penyakitModel->getPenyakit()
        ];
        return view('admin/d_penyakit.php', $data);
    }
    public function tambahpenyakit()
    {
        return view('admin/Td_penyakit.php');
    }










    public function login()
    {
        return view('admin/login.php');
    }
    public function aturan()
    {
        return view('admin/d_aturan.php');
    }


    public function tambahaturan()
    {
        return view('admin/Td_aturan.php');
    }



    // ambil data dari file td_penyakit.php
    public function save()
    {
        // $data = $this->request->getVar('namaGejala');
        // dd($data);
        $this->gejalaModel->save([
            'id' => $this->request->getVar('id'),
            'nama_gejala' => $this->request->getVar('namaGejala')
        ]);
        return redirect()->to('/admin/gejala');
    }
    public function savep()
    {
        // $data = $this->request->getVar('namaGejala');
        // dd($data);
        $this->gejalaModel->save([
            'nama_penyakit' => $this->request->getVar('namaPenyakit'),
            'keterangan' => $this->request->getVar('keterangan'),
            'solusi' => $this->request->getVar('solusi')
        ]);
        return redirect()->to('/admin/penyakit');
    }
    public function delete($id)
    {
        $this->gejalaModel->delete($id); //delete versi simple
        return redirect()->to('/admin/gejala');
    }
    public function edit($id)
    {
        $data = [
            'gejala' => $this->gejalaModel->getGejala($id)
        ];
        return view('admin/edit', $data);
    }
    public function update($id)
    {
        $this->gejalaModel->save([
            'id' => $id,
            'nama_gejala' => $this->request->getVar('namaGejala')
        ]);
        return redirect()->to('/admin/gejala');
    }
}
