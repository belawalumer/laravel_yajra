<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class Customers extends Controller
{
    public function index() 
    {
        if(request()->ajax()) {
            return datatables()->of(Customer::select([
                'id','name' , 'email'
            ]))
            ->addIndexColumn()
            ->make(true);
        }
        return view('customers_list');
    }
}
