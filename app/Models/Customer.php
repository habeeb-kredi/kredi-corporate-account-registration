<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'organization_name',
        'rc_number',
        'country',
        'business_type',
        'incorporation_date',
        'cac_document_url',
        'organization_contact',
        'organization_email',
        'webhook_url',
        'director_name',
        'director_contact',
        'director_email',
        'director_id_card',
        'director_passport'
    ];
}
