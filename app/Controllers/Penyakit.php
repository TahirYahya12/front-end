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
        return view('penyakit/index', $data);
    }
    public function tambah()
    {
        return view('penyakit/Td_penyakit.php');
    }
    public function save()
    {
        $this->penyakitModel->save([
            'kode_penyakit' => $this->request->getVar('kodePenyakit'),
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
        // $data = $this->request->getVar($id);
        $data = [
            'penyakit' => $this->penyakitModel->getPenyakit($id)
        ];
        // dd($data['penyakit']);
        return view('penyakit/edit', $data);
    }
    public function update($id)
    {
        $this->penyakitModel->save([
            'id' => $id,
            'kode_penyakit' => $this->request->getVar('kodePenyakit'),
            'nama_penyakit' => $this->request->getVar('namaPenyakit'),
            'keterangan' => $this->request->getVar('keterangan'),
            'solusi' => $this->request->getVar('solusi')
        ]);
        return redirect()->to('/penyakit');
    }
}
