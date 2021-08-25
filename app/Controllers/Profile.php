<?php

namespace App\Controllers;


class Profile extends BaseController
{
    public function index()
    {
        $data["email"] = $this->session->get('email');
        $data["company_name"] = $this->session->get('company_name');
        return view("profile", $data);
    }
}
