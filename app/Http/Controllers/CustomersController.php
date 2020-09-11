<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function index ()
    {
    	$customers = Customer::all();
    	return view('customers.index', compact('customers'));
    }

    public function show (Customer $customer)
    {
    	
    	return view('customers.show', compact('customer'));
    }

        public function create ()
    {
        
        return view('customers.create');
    }

    public function store ()
    {
        $vaidated_fields = request()->validate([
            'last_name'=>'required' ,
            'first_name'=>'required' ,
            'midlle_name'=>'required',
        ]);
        
        $customer = Customer::create($vaidated_fields);
        return rdirect('/customers');
    }
}
