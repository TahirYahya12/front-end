<?php

namespace App\Controllers;

use App\Models\GejalaModel;

class Gejala extends BaseController
{
    protected $gejalaModel;
    public function __construct()
    {
        $this->gejalaModel = new GejalaModel();
    }
    public function index()
    {
        $data = [
            'gejala' => $this->gejalaModel->getGejala()
        ];
        return view('gejala/index', $data);
    }
    public function konsule()
    {
        $data = [
            'gejala' => $this->gejalaModel->getGejala()
        ];
        return view('gejala/h_gejala', $data);
    }
    public function tambah()
    {
        return view('gejala/Td_gejala.php');
    }
    public function save()
    {
        $this->gejalaModel->save([
            'id' => $this->request->getVar('id'),
            'nama_gejala' => $this->request->getVar('namaGejala'),
            'kode_gejala' => $this->request->getVar('kodeGejala')
        ]);
        return redirect()->to('/gejala');
    }
    public function delete($id)
    {
        $this->gejalaModel->delete($id); //delete versi simple
        return redirect()->to('/gejala');
    }
    public function edit($id)
    {
        $data = [
            'gejala' => $this->gejalaModel->getGejala($id)
        ];
        // dd($data);
        return view('gejala/edit', $data);
    }
    public function update($id)
    {
        $this->gejalaModel->save([
            'id' => $id,
            'kode_gejala' => $this->request->getVar('kodeGejala'),
            'nama_gejala' => $this->request->getVar('namaGejala')
        ]);
        return redirect()->to('/gejala');
    }
}
