<?php

namespace App\Controllers;

use App\Models\Company;
use App\Models\User;


class Signin extends BaseController
{
    public function index()
    {
        $this->session->set(['isLoggedIn' => false]);

        helper(['form']);
        $from_registration = $this->session->getFlashdata('from_registration');
        $data['from_registration'] = $from_registration;
        return view('sign_in', $data);
    }

    public function login()
    {
        helper(['form']);

        $rules = [
            'email' => 'required|min_length[4]|max_length[100]|valid_email',
        ];

        if (!$this->validate(($rules))) {
            $data['validation'] = $this->validator;
            echo view('sign_in', $data);
            return;
        }

        $session = $this->session;

        $userModel = new User();
        $companyModel = new Company();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $hashed_password = $data['hashed_password'];
            if (password_verify($password, $hashed_password)) {

                $company_data = $companyModel->where('users_id', $data["id"])->first();

                $session_data = [
                    'user_id' => $data['id'],
                    'email' => $data['email'],
                    'company_id' => $company_data["id"],
                    'company_name' => $company_data["name"],
                    'isLoggedIn' => TRUE,
                    'isAdmin' => $data["is_admin"],
                ];

                $session->set($session_data);
                return redirect()->to('/profile');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        } else {
            $session->setFlashdata('msg', 'Incorrect credentials');
            return redirect()->to('/signin');
        }
    }
}
