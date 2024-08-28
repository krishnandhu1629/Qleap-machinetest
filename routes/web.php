<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentication routes
Auth::routes();

// Home route
Route ::get('/',[HomeController::class,'home']);

// Dashboard route for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->hasRole('employee')) {
            return redirect()->route('employee.dashboard');
        } else {
            return redirect('/');
        }
    })->name('dashboard');

    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        // CRUD operations for leads
        Route::resource('leads', LeadController::class);

        // CRUD operations for proposals
        Route::resource('proposals', ProposalController::class);

        // CRUD operations for estimates
        Route::resource('estimates', EstimateController::class);

        // CRUD operations for invoices
        Route::resource('invoices', InvoiceController::class);
    });

    // Employee routes
    Route::middleware(['role:employee'])->group(function () {
        Route::get('/employee/dashboard', function () {
            return view('employee.dashboard');
        })->name('employee.dashboard');

        // Create operations for leads
        Route::get('leads/create', [LeadController::class, 'create'])->name('leads.create');
        Route::post('leads', [LeadController::class, 'store'])->name('leads.store');

        // Create operations for proposals
        Route::get('proposals/create', [ProposalController::class, 'create'])->name('proposals.create');
        Route::post('proposals', [ProposalController::class, 'store'])->name('proposals.store');

        // Create operations for estimates
        Route::get('estimates/create', [EstimateController::class, 'create'])->name('estimates.create');
        Route::post('estimates', [EstimateController::class, 'store'])->name('estimates.store');

        // Create operations for invoices
        Route::get('invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
        Route::post('invoices', [InvoiceController::class, 'store'])->name('invoices.store');
    });
});
