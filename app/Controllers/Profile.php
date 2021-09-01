<?php

namespace App\Controllers;

use App\Models\ConsultationRequest;

class Profile extends BaseController
{
    public function index()
    {
        if ($this->session->get('isAdmin')) {
            return redirect()->to("/consultation-requests");
        }

        $query = $this->db->query("SELECT * FROM consultation_request WHERE users_id=?", [$this->session->get("user_id")]); #SQL Query 4
        $consultation_request_data = $query->getResultArray();

        $data["email"] = $this->session->get('email');
        $data["company_name"] = $this->session->get('company_name');
        $data['consultation_requests'] = $consultation_request_data;
        $data['consultation_requests_count'] = count($consultation_request_data);
        return view("profile", $data);
    }
}
