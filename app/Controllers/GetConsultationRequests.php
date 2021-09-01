<?php

namespace App\Controllers;


class GetConsultationRequests extends BaseController
{
    public function index()
    {
        if (!$this->session->get('isAdmin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $query = $this->db->query("SELECT * FROM consultation_request", [$this->session->get("user_id")]); #SQL Query 5
            $consultation_request_data = $query->getResultArray();

            $data["count"] = count($consultation_request_data);
            $data["consultation_requests"] = $consultation_request_data;

            return view("get_consultation_requests", $data);
        }
    }
}
