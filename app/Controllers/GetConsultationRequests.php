<?php

namespace App\Controllers;

use App\Models\ConsultationRequest;

class GetConsultationRequests extends BaseController
{
    public function index()
    {
        if (!$this->session->get('isAdmin')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $consultation_request = new ConsultationRequest();
            d($consultation_request);

            $consultation_request_data = $consultation_request->findAll();
            // $consultation_request_data.count()
            d($consultation_request_data);

            $data["count"] = count($consultation_request_data);
            $data["consultation_requests"] = $consultation_request_data;

            return view("get_consultation_requests", $data);
        }
    }
}
