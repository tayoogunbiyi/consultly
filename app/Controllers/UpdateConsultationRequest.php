<?php

namespace App\Controllers;

use App\Models\ConsultationRequest;

class UpdateConsultationRequest extends BaseController
{
    public function get($id)
    {
        $consultation_request = new ConsultationRequest();
        $consultation_request_data = $consultation_request->where('id', $id)->first();
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


            $consultation_request_data["name"] = $this->request->getVar('name');
            $consultation_request_data["about"] = $this->request->getVar('about');
            $consultation_request_data["website"] = $this->request->getVar('website');
            $consultation_request_data["location"] = $this->request->getVar('location');
            $consultation_request_data["address"] = $this->request->getVar('address');

            $consultation_request_data["category"] = $this->request->getVar('category');
            $consultation_request_data["niche"] = $this->request->getVar('niche');
            $consultation_request_data["duration_days"] = $this->request->getVar('duration-number');

            $consultation_request_data["minimum_budget"] = $this->request->getVar('minimum-budget');
            $consultation_request_data["recommended_budget"] = $this->request->getVar('recommended-budget');
            $consultation_request_data["number_of_users"] = $this->request->getVar('number-of-users');
            $consultation_request_data["additional"] = $this->request->getVar('additional-metrics');

            $consultation_request_data["users_id"] = $this->session->get('user_id');
            $consultation_request_data["company_id"] = $this->session->get('company_id');

            $consultation_request->update($id, $consultation_request_data);

            $OK["12"] = 44;
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

            echo view('create_proposal', $data);
        }
    }
}
