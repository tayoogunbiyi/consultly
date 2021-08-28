<?php

namespace App\Models;

use CodeIgniter\Model;


class ConsultationRequest extends Model
{

    protected $table = 'consultation_request';

    protected $allowedFields = [
        'name',
        'about',
        'website',
        'location',
        'address',
        'category',
        'niche',
        'duration_days',
        'minimum_budget',
        'recommended_budget',
        'number_of_users',
        'additional',
        'users_id',
        'company_id'
    ];
}
