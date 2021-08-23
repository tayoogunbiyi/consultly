<?php

namespace App\Controllers;

use App\Models\User;

class Register extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('register');
    }

    public function save()
    {
        helper(['form']);
        $rules = [
            'company-name'          => 'required|min_length[2]|max_length[50]',
            'company-email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'company-password'      => 'required|min_length[4]|max_length[50]',
            'company-number'      => 'required|min_length[4]|max_length[50]',
            'company-confirm-password'  => 'matches[company-password]',
        ];

        if ($this->validate($rules)) {
            $user = new User();

            $data = [
                'email'    => $this->request->getVar('company-email'),
                'hashed_password' => password_hash($this->request->getVar('company-password'), PASSWORD_BCRYPT),
            ];


            $user->insert($data);

            $this->session->setFlashdata("from_registration", true);
            return redirect()->to('/signin');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
