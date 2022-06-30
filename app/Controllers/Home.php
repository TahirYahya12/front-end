<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\PenyakitModel;

class Home extends BaseController
{
    protected $gejalaModel;
    protected $penyakitModel;
    public function __construct()
    {
        $this->gejalaModel = new GejalaModel();
        $this->penyakitModel = new PenyakitModel();
    }
    public function index()
    {
        return view('index');
    }
    public function tanaman()
    {
        return view('pages/h_tanaman');
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
        $data = $this->request->getVar('gej');
        if ($data == 0) {
            echo "<script>
            alert('silahkan pilih gejala terlebih dahulu!!');
            window.location.href = '/gejala/konsule';
            </script>";
        } else {
            $data = implode(",", $data);
            $array = explode(",", $data);

            $tmpA = 0;
            // $tmpAD = 0;
            $tmpB = 0;
            $tmpC = 0;
            $tmpD = 0;
            $tmpE = 0;
            // $tmpEF = 0;
            $tmpF = 0;
            $tmpG = 0;

            foreach ($array as $a) {
                if ($a == "A") {
                    $tmpA++;
                } else if ($a == "B") {
                    $tmpB++;
                } else if ($a == "C") {
                    $tmpC++;
                } else if ($a == "D") {
                    $tmpD++;
                } else if ($a == "E") {
                    $tmpB++;
                } else if ($a == "F") {
                    $tmpF++;
                } else {
                    $tmpG++;
                }
            }
            $max = max($tmpA, $tmpB, $tmpC, $tmpD, $tmpE, $tmpF, $tmpG);
            if ($max == $tmpA) {
                // echo 'A';
                $data = [
                    'title' => 'A',
                    'isi' => $this->penyakitModel->getPenyakit('P1')
                ];
                return view('pages/h_hasil', $data);
                // dd($isi);
            } else if ($max == $tmpB) {
                // echo 'B';
                $data = [
                    'title' => 'B',
                    'isi' => $this->penyakitModel->getPenyakit('P2')
                ];
                return view('pages/h_hasil', $data);
            } else if ($max == $tmpC) {
                // echo 'B';
                $data = [
                    'title' => 'C',
                    'isi' => $this->penyakitModel->getPenyakit('P3')
                ];
                return view('pages/h_hasil', $data);
            } else if ($max == $tmpD) {
                // echo 'B';
                $data = [
                    'title' => 'D',
                    'isi' => $this->penyakitModel->getPenyakit('P4')
                ];
                return view('pages/h_hasil', $data);
            } else if ($max == $tmpE) {
                // echo 'B';
                $data = [
                    'title' => 'E',
                    'isi' => $this->penyakitModel->getPenyakit('P5')
                ];
                return view('pages/h_hasil', $data);
            } else if ($max == $tmpF) {
                // echo 'B';
                $data = [
                    'title' => 'F',
                    'isi' => $this->penyakitModel->getPenyakit('P6')
                ];
                return view('pages/h_hasil', $data);
            } else if ($max == $tmpG) {
                // echo 'B';
                $data = [
                    'title' => 'G',
                    'isi' => $this->penyakitModel->getPenyakit('P7')
                ];
                return view('pages/h_hasil', $data);
            }
            //jika sama belum di hendle !!...
        }
    }
}
