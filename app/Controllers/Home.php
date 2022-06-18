<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('school.php');
    }
    public function coba()
    {
        echo "nama saya $this->nama";
    }
}
