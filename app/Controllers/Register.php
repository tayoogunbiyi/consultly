<?php

namespace App\Controllers;

use App\Models\Company;
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
            'company-name'          => 'required|min_length[2]|max_length[50]|is_unique[companies.name]',
            'company-email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'company-password'      => 'required|min_length[4]|max_length[50]',
            'company-number'      => 'required|min_length[4]|max_length[50]|is_unique[companies.number]',
            'company-confirm-password'  => 'matches[company-password]',
        ];

        if ($this->validate($rules)) {
            $user = new User();
            $company = new Company();

            $user_data = [
                'email'    => $this->request->getVar('company-email'),
                'hashed_password' => password_hash($this->request->getVar('company-password'), PASSWORD_BCRYPT),
            ];

            $sql = "INSERT INTO users (email, hashed_password) VALUES (" . $this->db->escape($user_data["email"]) . ", " . $this->db->escape($user_data["hashed_password"]) . ")"; # SQL Query 7 

            $this->db->query($sql);

            $company_data = [
                "name" => $this->request->getVar('company-name'),
                "number" => $this->request->getVar('company-number'),
                "users_id" => $this->db->insertID(),
            ];

            $sql = "INSERT INTO companies (name, number, users_id) VALUES (" . $this->db->escape($company_data["name"]) . ", " . $this->db->escape($company_data["number"]) . ", " . $this->db->escape($company_data["users_id"]) . ")"; # SQL Query 8
            $this->db->query($sql);

            $this->session->setFlashdata("from_registration", true);
            return redirect()->to('/signin');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
