<?php

namespace App\Controllers;


class GetConsultationRequests extends BaseController
{
    public function index()
    {
        if (!$this->session->get('isAdmin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            return view("get_consultation_requests");
        }
    }
}
