<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(5);
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')
                         ->with('success','Customer created successfully');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());

        return redirect()->route('customers.index')
                         ->with('success','Customer updated successfully');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')
                         ->with('success','Customer deleted');
    }

    public function exportCsv()
{
    $customers = Customer::all();

    $filename = "customers.csv";
    $handle = fopen($filename, 'w+');

    fputcsv($handle, ['Name', 'Email']);

    foreach($customers as $customer){
        fputcsv($handle, [
            $customer->name,
            $customer->email
        ]);
    }

    fclose($handle);

    return response()->download($filename);
}

}
