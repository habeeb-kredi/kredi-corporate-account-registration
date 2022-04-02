<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'organization_name'=>"required",
            'rc_number'=>"nullable",
            'country'=>"required",
            'business_type'=>"required",
            'incorporation_date'=>"nullable",
            'cac_document_url'=>"nullable",
            'organization_contact'=>"required",
            'organization_email'=>"required",
            'webhook_url'=>"nullable",
            'director_name'=>"required",
            'director_contact'=>"required",
            'director_email'=>"required",
            'director_id_card'=>"nullable",
            'director_passport'=>"nullable",
        ];
    }
}
