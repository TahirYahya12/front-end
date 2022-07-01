<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $table = 'penyakit'; //nama table DB
    protected $useTimestamps = true; //created_at and update_at
    protected $allowedFields = ['nama_penyakit', 'keterangan', 'solusi', 'kode_penyakit'];

    // 
    public function getPenyakit($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
