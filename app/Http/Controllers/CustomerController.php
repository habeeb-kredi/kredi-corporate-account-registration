<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Services\DocumentUploads;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $documentUploads = new DocumentUploads();
        $request['director_id_card'] =  $documentUploads->upload($request, 'director_id_card', 'public/director_id_card');
        $request['director_passport'] = $documentUploads->upload($request, 'director_passport', 'public/director_passport');

        $validateRequest = $request->validated();
        Customer::create($validateRequest);


        echo "Success";
    }

}
