<?php

namespace App\Controllers;

use App\Models\ConsultationRequest;

class CreateConsultationRequest extends BaseController
{
    public function index()
    {
        $data["email"] = $this->session->get('email');
        $data["company_name"] = $this->session->get('company_name');
        return view("create_proposal", $data);
    }

    public function submit()
    {
        helper(['form']);
        $rules = [
            "name" => 'required|min_length[2]|max_length[50]',
            "about" => 'required|min_length[10]|max_length[100]',
            "website" => 'required|min_length[10]|max_length[50]',
            "location" => 'required|min_length[2]|max_length[50]',
            "address" => 'required|min_length[2]|max_length[100]',
            "category" => 'required|min_length[2]|max_length[100]',
            "niche" => 'required|min_length[2]|max_length[100]',
            "duration-number" => 'required|numeric',
            "duration-type" => 'required|min_length[2]|max_length[100]',
            "minimum-budget" => 'required|numeric',
            "recommended-budget" => 'required|numeric',
            "number-of-users" => 'required|numeric',
        ];

        if ($this->validate(($rules))) {
            $consultation_request = new ConsultationRequest();
            $consultation_request_data = [];


            $name = $this->request->getVar('name');
            $about = $this->request->getVar('about');
            $website = $this->request->getVar('website');
            $location = $this->request->getVar('location');
            $address = $this->request->getVar('address');

            $category = $this->request->getVar('category');
            $niche = $this->request->getVar('niche');
            $duration_days = $this->request->getVar('duration-number');

            $minimum_budget = $this->request->getVar('minimum-budget');
            $recommended_budget = $this->request->getVar('recommended-budget');
            $number_of_users = $this->request->getVar('number-of-users');
            $additional = $this->request->getVar('additional-metrics');

            $users_id = $this->session->get('user_id');
            $company_id = $this->session->get('company_id');


            // $sql = "INSERT INTO mytable (title, name) VALUES (" . $this->db->escape($title) . ", " . $db->escape($name) . ")";

            // SQL Query 6
            $sql = "
                INSERT INTO consultation_request (
                    name, about, website, location, address, category, 
                    niche, duration_days, minimum_budget, recommended_budget, 
                    number_of_users, additional, users_id, company_id
                ) VALUES (
                    " . $this->db->escape($name) . ", " . $this->db->escape($about) . ", "
                . $this->db->escape($website) . ", " . $this->db->escape($location) . ", "
                . $this->db->escape($address) . ", " . $this->db->escape($category) . ", "
                . $this->db->escape($niche) . ", " . $this->db->escape($duration_days) . ", "
                . $this->db->escape($minimum_budget) . ", " . $this->db->escape($recommended_budget) . ", "
                . $this->db->escape($number_of_users) . ", " . $this->db->escape($additional) . ", "
                . $this->db->escape($users_id) . ", " . $this->db->escape($company_id) .
                ")";

            
            $this->db->query($sql);

            $success = $this->db->affectedRows() > 0;

            if (!$success) {
                $data["name"] = $this->request->getVar('name');
                $data["about"] = $this->request->getVar('about');
                $data["website"] = $this->request->getVar('website');
                $data["location"] = $this->request->getVar('location');
                $data["address"] = $this->request->getVar('address');
                $data["additional_general"] = $this->request->getVar('additional-general');

                $data["category"] = $this->request->getVar('category');
                $data["niche"] = $this->request->getVar('niche');
                $data["additional_market"] = $this->request->getVar('additional-market');
                $data["duration_number"] = $this->request->getVar('duration-number');
                $data["duration_type"] = $this->request->getVar('duration-type');

                $data["minimum_budget"] = $this->request->getVar('minimum-budget');
                $data["recommended_budget"] = $this->request->getVar('recommended-budget');
                $data["number_of_users"] = $this->request->getVar('number-of-users');
                $data["additional_metrics"] = $this->request->getVar('additional-metrics');

                $data["email"] = $this->session->get('email');

                $data["company_name"] = $this->session->get('company_name');
                $data['validation'] = $this->validator;

                return view('create_proposal', $data);
            }
            return redirect()->to("/consultation-request/{$this->db->insertID()}");
        } else {

            $data["name"] = $this->request->getVar('name');
            $data["about"] = $this->request->getVar('about');
            $data["website"] = $this->request->getVar('website');
            $data["location"] = $this->request->getVar('location');
            $data["address"] = $this->request->getVar('address');
            $data["additional_general"] = $this->request->getVar('additional-general');

            $data["category"] = $this->request->getVar('category');
            $data["niche"] = $this->request->getVar('niche');
            $data["additional_market"] = $this->request->getVar('additional-market');
            $data["duration_number"] = $this->request->getVar('duration-number');
            $data["duration_type"] = $this->request->getVar('duration-type');

            $data["minimum_budget"] = $this->request->getVar('minimum-budget');
            $data["recommended_budget"] = $this->request->getVar('recommended-budget');
            $data["number_of_users"] = $this->request->getVar('number-of-users');
            $data["additional_metrics"] = $this->request->getVar('additional-metrics');

            $data["email"] = $this->session->get('email');

            $data["company_name"] = $this->session->get('company_name');
            $data['validation'] = $this->validator;

            echo view('create_proposal', $data);
        }
    }
}
