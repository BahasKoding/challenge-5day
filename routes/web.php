<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', function () {
    return view('auth.register');
});

// Logout Route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// ! Public Routes
Route::get('/', function () {
    return view('auth.login');
});

// ! Protected Routes (requires authentication)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    Route::get('/customers', [CustomerController::class, 'index']);
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
    // Route::get('/customers', function () {
    //     return view('master-databases.customer.index');
    // });
});
