<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customers=customer::latest()->paginate(6);
        return view('customers.index',compact('customers'))
        ->with('i',(request()->input('page',1)-1)*6);
        
    }

    public function create()
    {
       return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'town'=>'required',
            'pname'=>'required',
            'tellnumber'=>'required',
            'email'=>'required',]);
      customer::create($request->all());
        return redirect()->route('customers.index')
       ->with('success','customer created successfully.');
      
    }

    public function edit(customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }

    public function update(Request $request, customer $customer)
    {
        $request->validate([

        ]);
        $customer->update($request->all());
        return redirect()->route('customers.index')
        ->with('success','cutomer upadted successfully');
    }

    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')
        ->with('success','customer deleted successfully');
    }
}
