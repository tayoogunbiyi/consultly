<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Resetpassword extends Controller
{
    public function index()
    {
        return view('forgot_password');
    }
}