<?php
use App\Models\Customer;
use Illuminate\Http\Request;

Route::get('/customers', function(){
    return Customer::all();
});

Route::get('/customers/{id}', function($id){
    return Customer::find($id);
});

Route::post('/customers', function(Request $request){
    return Customer::create($request->all());
});

Route::put('/customers/{id}', function(Request $request,$id){
    $customer = Customer::find($id);
    $customer->update($request->all());
    return $customer;
});

Route::delete('/customers/{id}', function($id){
    return Customer::destroy($id);
});
