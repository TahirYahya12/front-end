<?php

namespace App\Controllers;

class Penyakit extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function bale()
    {
        return view('pages/cover');
    }

    public function tanaman()
    {
        return view('pages/h_tanaman');
    }
}
