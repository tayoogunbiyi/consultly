<?php

namespace App\Controllers;

use App\Models\ConsultationRequest;

class ReviewConsultationRequest extends BaseController
{
    public function get($id)
    {
        echo "Hello review!!";
        return;

        $query = $this->db->query("SELECT * FROM consultation_request WHERE id=? ", [$id]); #SQL Query 9
        $consultation_request_data = $query->getRowArray();
        $user_id = $this->session->get('user_id');


        $consultation_request_data["email"] = $this->session->get('email');
        $consultation_request_data["company_name"] = $this->session->get('company_name');

        if ($consultation_request_data) {
            $can_view = $consultation_request_data["users_id"] == $user_id;
            if ($can_view) {
                return view("update_consultation_request", $consultation_request_data);
            }
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    public function submit($id)
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


            $sql = "
                UPDATE consultation_request
                SET name='{$name}',about='${about}',website='${website}',location='${location}',address='${address}',category='${category}',niche='${niche}',duration_days='${duration_days}',minimum_budget='${minimum_budget}',recommended_budget='${recommended_budget}',number_of_users='${number_of_users}',additional='${additional}',users_id='${users_id}',company_id='${company_id}'
                WHERE id='{$id}'
            ";

            $this->db->query($sql);

            return redirect()->to("/consultation-request/{$id}");
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

            echo view('update_consultation_request', $data);
        }
    }
}
