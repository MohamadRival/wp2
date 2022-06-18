<?php

namespace App\Controllers;

class coba extends BaseController
{
    public function index()
    {
        return view('pages/depan.php');
    }
    public function login()
    {
        $data = [
            'title' => 'Selamat datang'
        ];
        return view('auth/login.php', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'register'
        ];
        return view('auth/register.php', $data);
    }
}
