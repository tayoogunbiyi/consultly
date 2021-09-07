<?php

namespace App\Controllers;

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
                $consultation_request_data["is_admin"] = $this->session->get('isAdmin');

                $query = $this->db->query("SELECT * FROM consultation_report WHERE request_id=? ", [$id]); #SQL Query 11

                $report_data = $query->getRowArray();
                $consultation_request_data["has_been_reviewed"] = $report_data != null;
                $consultation_request_data["report_id"] = $report_data["id"];


                return view("get_consultation_request", $consultation_request_data);
            }
        }
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
