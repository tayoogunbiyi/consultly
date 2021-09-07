<?php

namespace App\Controllers;

class GetConsultationReport extends BaseController
{
    public function get($id)
    {
        $query = $this->db->query("SELECT * FROM consultation_report WHERE id=? ", [$id]); #SQL Query 1
        $consultation_report_data = $query->getRowArray();

        $user_id = $this->session->get('user_id');

        if ($consultation_report_data) {
            $can_view = $consultation_report_data["users_id"] == $user_id || $this->session->get('isAdmin');
            if ($can_view) {
                $query = $this->db->query("SELECT * FROM companies WHERE id=? ", [$consultation_report_data["company_id"]]); #SQL Query 12

                $consultation_report_data["company_name"] = $query->getRowArray()["name"];

                return view("get_consultation_report", $consultation_report_data);
            }
        }
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
