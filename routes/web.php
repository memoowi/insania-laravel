<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('insania.base');
});

// Route::get('/customer', function () {
//     return "Sorry " . Auth::user()->name . ", you are not authorized to access this page.";
// })->middleware('auth');

Auth::routes();

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['admin','auth'])->name('home');

Route::prefix('admin')->middleware(['auth','admin'])->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardAdminController::class, 'index'])->name('index');
    Route::get('/service/new', [App\Http\Controllers\Admin\DashboardAdminController::class, 'serviceNew'])->name('new.service');
});

Route::prefix('customer')->middleware(['auth','customer'])->name('customer.')->group(function () {
    Route::get('/', [App\Http\Controllers\Customer\DashboardCustomerController::class, 'index'])->name('index');
});

