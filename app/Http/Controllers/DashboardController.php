<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $client = Customer::get();
        return Inertia::render('Dashboard')->with('clients', $client);
    }
    public function showClient(Customer $customer)
    {
        return Inertia::render('ViewClient')->with('client', $customer);
    }

}
