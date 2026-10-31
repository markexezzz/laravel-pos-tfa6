<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // TFA5: static array  ->  TFA6: Eloquent
        $customers = Customer::orderBy('id')->get();

        return view('customers.index', compact('customers'));
    }
}
