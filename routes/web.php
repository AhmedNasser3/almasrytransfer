<?php

use App\Http\Controllers\admin\category\CategoryController;
use App\Http\Controllers\admin\debt\ExternalDebtController;
use App\Http\Controllers\admin\debt\InternalDebtController;
use App\Http\Controllers\admin\home\HomeController;
use App\Http\Controllers\Admin\Wallet\WalletController;
use App\Models\admin\debt\ExternalDebt;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'])->name('home.page');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// categoryController
Route::controller(CategoryController::class)->prefix('category')->group(function(){
    Route::get('/create', 'create')->name('category.create');
    Route::post('/store', 'store')->name('category.store');
    Route::get('/edit/{categoryId}', 'edit')->name('category.edit');
    Route::put('/update/{categoryId}', 'update')->name('category.update');
    Route::post('/delete/{categoryId}', 'delete')->name('category.delete');
});
// walletController
Route::controller(WalletController::class)->prefix('wallet')->group(function(){
    Route::get('/create', 'create')->name('wallet.create');
    Route::post('/store', 'store')->name('wallet.store');
    Route::get('/edit/{walletId}', 'edit')->name('wallet.edit');
    Route::put('/update/{walletId}', 'update')->name('wallet.update');
    Route::post('/delete/{walletId}', 'delete')->name('wallet.delete');
});
// external debit
Route::controller(ExternalDebtController::class)->prefix('external-debit')->group(function(){
Route::get('/create', 'create')->name('external.create');
Route::post('/store', action: 'store')->name('external.store');
Route::get('/edit/{ExternalId}', 'edit')->name('external.edit');
Route::put('/update/{ExternalId}', [ExternalDebtController::class, 'update'])->name('external.update');
Route::post('/delete/{ExternalId}', 'delete')->name('external.delete');
});
// internal debit
Route::controller(InternalDebtController::class)->prefix('internal-debit')->group(function(){
Route::get('/create', 'create')->name('internal.create');
Route::post('/store', action: 'store')->name('internal.store');
Route::get('/edit/{InternalId}', 'edit')->name('internal.edit');
Route::put('/update/{InternalId}', 'update')->name('internal.update');
Route::post('/delete/{InternalId}', 'delete')->name('internal.delete');
});
