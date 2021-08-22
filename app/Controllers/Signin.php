<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Signin extends Controller
{
    public function index()
    {
        return view('sign_in');
    }
}