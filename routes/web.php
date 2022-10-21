<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EnterpriseController, InstitutionController, ReceiptController, DonationController
};

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

Route::view('/', 'dashboard')->name('dashboard');

Route::name('enterprise.')->prefix('enterprise')->group(function () {
    
    Route::get('/create', [EnterpriseController::class, 'create'])->name('create');
    
    Route::post('/', [EnterpriseController::class, 'store'])->name('store');

    Route::get('/', [EnterpriseController::class, 'index'])->name('index');

});

Route::name('institution.')->prefix('institution')->group(function () {

    Route::get('/create', [InstitutionController::class, 'create'])->name('create');

    Route::post('/', [InstitutionController::class, 'store'])->name('store');

});

Route::name('receipt.')->prefix('receipt')->group(function () {

    Route::get('/create', [ReceiptController::class, 'create'])->name('create');

    Route::post('/', [ReceiptController::class, 'store'])->name('store');

});

Route::name('donation.')->prefix('donation')->group(function ()
{
    Route::get('/create', [DonationController::class, 'create'])->name('create');

    Route::post('/', [DonationController::class, 'store'])->name('store');
});