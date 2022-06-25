<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index.php');
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
}
