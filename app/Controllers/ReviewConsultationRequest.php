<?php

namespace App\Controllers;


class ReviewConsultationRequest extends BaseController
{
    public function get($id)
    {
        if (!$this->session->get('isAdmin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $data["company_name"] = $this->session->get('company_name');

        $query = $this->db->query("SELECT * FROM consultation_request WHERE id=? ", [$id]); #SQL Query 1
        $consultation_request_data = $query->getRowArray();

        $data["consultation_request_id"] = $consultation_request_data["id"];
        $data["consultation_request_name"] = $consultation_request_data["name"];
        $data["consultation_request_overview"] = $consultation_request_data["about"];

        return view("create_consultation_report", $data);
    }

    public function submit($id)
    {
        if (!$this->session->get('isAdmin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        helper(['form']);

        $rules = [
            "success_probability" => 'required|numeric',
            "summary" => 'required|min_length[2]|max_length[1000]',
            "duration" => 'required|numeric',
            "min_users" => 'required|numeric',
            "max_users" => 'required|numeric',
            'feasibility' => 'required|min_length[2]|max_length[100]',
        ];

        if ($this->validate(($rules))) {
            $name = $this->request->getVar('name');
            $success_probability = $this->request->getVar('success_probability');
            $summary = $this->request->getVar('summary');
            $duration = $this->request->getVar('duration');
            $min_users = $this->request->getVar('min_users');
            $max_users = $this->request->getVar('max_users');
            $feasibility = $this->request->getVar('feasibility');
            $users_id = $this->session->get('user_id');
            $company_id = $this->session->get('company_id');


            $sql = "
                INSERT INTO consultation_report (
                    success_probability, summary, duration, min_users, max_users, 
                    feasibility, users_id, company_id, request_id, category
                ) VALUES (
                    " . $this->db->escape($success_probability) . ", "
                . $this->db->escape($summary) . ", " . $this->db->escape($duration) . ", "
                . $this->db->escape($min_users) . ", " . $this->db->escape($max_users) . ", "
                . $this->db->escape($feasibility) . ", " . $this->db->escape($users_id) . ", "
                . $this->db->escape($company_id) . ", " . $this->db->escape($id) . ", " . $this->db->escape($summary) .
                ")";

            $this->db->query($sql);
            $insertID = $this->db->insertID();
            if ($this->db->affectedRows() > 0) {
                $sql = "
                UPDATE consultation_request
                SET status='completed'
                WHERE id='{$id}'
            ";
                $this->db->query($sql);

                // TODO - Add to users pending new stuff to review
            }
            return redirect()->to("/consultation-report/{$insertID}");
        } else {

            $data["company_name"] = $this->session->get('company_name');

            $query = $this->db->query("SELECT * FROM consultation_request WHERE id=? ", [$id]); #SQL Query 1
            $consultation_request_data = $query->getRowArray();

            $data["consultation_request_id"] = $consultation_request_data["id"];
            $data["consultation_request_name"] = $consultation_request_data["name"];
            $data["consultation_request_overview"] = $consultation_request_data["about"];
            $data['validation'] = $this->validator;

            echo view('create_consultation_report', $data);
        }
    }
}
