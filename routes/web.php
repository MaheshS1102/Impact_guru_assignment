<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::resource('orders', OrderController::class);
    Route::get('/customers/export/csv', [CustomerController::class,'exportCsv'])
        ->name('customers.export.csv');


});

require __DIR__.'/auth.php';
require __DIR__.'/profile.php'; // if using earlier instructions
