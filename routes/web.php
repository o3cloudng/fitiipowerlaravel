<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Customers Routes
Route::resource('customer', CustomerController::class);
// Route::prefix('customer')->group(function () {
//     Route::get('/list', function () {
//         return view('customers.customers');
//     })->name('customers');

//     Route::get('/add', function () {
//         return view('customers.addcustomer');
//     })->name('addcustomer');
// });


Route::get('/test', function () {
    return view('auth.test');
})->name('test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
