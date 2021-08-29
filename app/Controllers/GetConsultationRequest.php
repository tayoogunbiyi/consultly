<?php

namespace App\Controllers;

use App\Models\ConsultationRequest;
use CodeIgniter\Exceptions\PageNotFoundException;
use Exception;

class GetConsultationRequest extends BaseController
{
    public function get($id)
    {
        $consultation_request = new ConsultationRequest();
        $consultation_request_data = $consultation_request->where('id', $id)->first();
        $user_id = $this->session->get('user_id');
        if ($consultation_request_data && $consultation_request_data["users_id"] == $user_id) {
            $data["name"] = $consultation_request_data["name"];
            $data["about"] = $consultation_request_data["about"];
            $data["website"] = $consultation_request_data["website"];
            $data["address"] = $consultation_request_data["address"];
            return view("get_consultation_request", $data);
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
