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
            'title' => 'login'
        ];
        return view('auth/login.php', $data);
        // contoh controllers
    }
    public function register()
    {
        $data = [
            'title' => 'register'
        ];
        return view('auth/register.php', $data);
    }
}
