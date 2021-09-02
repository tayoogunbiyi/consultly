<?php

namespace App\Controllers;

use App\Models\ConsultationRequest;
use CodeIgniter\Exceptions\PageNotFoundException;
use Exception;

class GetConsultationRequest extends BaseController
{
    public function get($id)
    {
        $query = $this->db->query("SELECT * FROM consultation_request WHERE id=? ", [$id]); #SQL Query 1
        $consultation_request_data = $query->getRowArray();

        $user_id = $this->session->get('user_id');

        if ($consultation_request_data) {
            $can_view = $consultation_request_data["users_id"] == $user_id || $this->session->get('isAdmin');
            if ($can_view) {
                $query = $this->db->query("SELECT * FROM companies WHERE id=? ", [$consultation_request_data["company_id"]]); #SQL Query 10

                $consultation_request_data["company_name"] = $query->getRowArray()["name"];
                return view("get_consultation_request", $consultation_request_data);
            }
        }
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
