<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact');
    }

    public function submit()
    {
        $data["message"] = "Thank you for contacting us. We would get back to you in 3 working days";
        return view('contact', $data);
    }
}
