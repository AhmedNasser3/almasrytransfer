<?php

use Illuminate\Support\Facades\Route;
use App\Models\admin\debt\ExternalDebt;
use App\Http\Controllers\admin\home\HomeController;
use App\Http\Controllers\admin\wallet\WalletController;
use App\Http\Controllers\admin\category\CategoryController;
use App\Http\Controllers\admin\debt\ExternalDebtController;
use App\Http\Controllers\admin\debt\InternalDebtController;
use App\Http\Controllers\admin\honesty\PersonalHonestyController;

Route::get('/',[HomeController::class, 'index'])->name('home.page');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


// categoryController
Route::controller(CategoryController::class)->prefix('category')->group(function(){
    Route::get('/create', 'create')->name('category.create');
    Route::post('/store', 'store')->name('category.store');
    Route::get('/edit/{categoryId}', 'edit')->name('category.edit');
    Route::put('/update/{categoryId}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{categoryId}', 'delete')->name('category.delete');
});
// walletController
Route::controller(WalletController::class)->prefix('wallet')->group(function(){
    Route::get('/all', 'all')->name('wallet.all');
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
// personal honest
Route::controller(PersonalHonestyController::class)
->prefix('personal-honesty')
->group(function () {
    Route::get('/create', 'create')->name('personal.create');
    Route::post('/store', 'store')->name('personal.store');
    Route::get('/edit/{PersonalHonestyId}', 'edit')->name('personal.edit');
    Route::put('/update/{PersonalHonestyId}', 'update')->name('personal.update');
    Route::get('/delete/{PersonalHonestyId}', 'delete')->name('personal.delete');
});
// views
Route::controller(HomeController::class)->prefix('wallet')->group(function(){
    Route::get('/WalletView/{walletId}', 'WalletView')->name('wallet.WalletView');
});
Route::controller(HomeController::class)->prefix('users')->group(function(){
    Route::get('/create',  'createUser')->name('user.create');
    Route::get('/view',  'viewUser')->name('user.view');
    Route::post('/storeUser',  'storeUser')->name('user.storeUser');
    Route::get('/deleteUser/{userId}',  'deleteUser')->name('user.deleteUser');
});