<?php

namespace App\Controllers;

use App\Models\PenyakitModel;

class Penyakit extends BaseController
{
    protected $penyakitModel;
    public function __construct()
    {
        $this->penyakitModel = new PenyakitModel();
    }
    public function index()
    {
        $data = [
            'id' => $this->penyakitModel->getPenyakit('id'),
            'penyakit' => $this->penyakitModel->getPenyakit()
        ];
        return view('admin/d_penyakit.php', $data);
    }
    public function tambahpenyakit()
    {
        return view('admin/Td_penyakit.php');
    }
    public function save()
    {
        // $data = $this->request->getVar();
        // dd($data);
        $this->penyakitModel->save([
            'nama_penyakit' => $this->request->getVar('namaPenyakit'),
            'keterangan' => $this->request->getVar('keterangan'),
            'solusi' => $this->request->getVar('solusi')
        ]);
        return redirect()->to('/penyakit');
    }
    public function delete($id)
    {
        $this->penyakitModel->delete($id); //delete versi simple
        return redirect()->to('/penyakit');
    }
    public function edit($id)
    {
        $data = [
            'penyakit' => $this->penyakitModel->getPenyakit($id)
        ];
        return view('admin/edit', $data);
    }
    // public function update($id)
    // {
    //     $this->gejalaModel->save([
    //         'id' => $id,
    //         'nama_gejala' => $this->request->getVar('namaGejala')
    //     ]);
    //     return redirect()->to('/admin/gejala');
    // }
}
