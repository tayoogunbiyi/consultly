<?php

namespace App\Controllers;


class Profile extends BaseController
{
    public function index()
    {
        if ($this->session->get('isAdmin')) {
            return view("get_consultation_requests");
        }
        $data["email"] = $this->session->get('email');
        $data["company_name"] = $this->session->get('company_name');
        return view("profile", $data);
    }
}
