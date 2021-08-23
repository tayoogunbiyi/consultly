<?php

namespace App\Controllers;


class Profile extends BaseController
{
    public function index()
    {
        $session = $this->session;
        echo "Hello : " . $session->get('email');
    }
}
