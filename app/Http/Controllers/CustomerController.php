<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function manage_customer(){
    $all_customer = Customer::all();
     return view('admin.customer.manage-customer',compact('all_customer'));
   }
   
}
