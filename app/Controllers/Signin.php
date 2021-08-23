<?php

namespace App\Controllers;

class Signin extends BaseController
{
    public function index()
    {
        $from_registration = $this->session->getFlashdata('from_registration');
        $data['from_registration'] = $from_registration;
        return view('sign_in', $data);
    }
}
