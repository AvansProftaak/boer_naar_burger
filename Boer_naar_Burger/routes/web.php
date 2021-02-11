<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

//Site Routes
Route::get('/about/', [App\Http\Controllers\Pages\AboutController::class, 'index'])->name('pages.about');
Route::get('/contact/', [App\Http\Controllers\Pages\ContactController::class, 'index'])->name('pages.contact');

//Shop Routes
Route::get('/shop/{shop}/step1', [ShopController::class, 'index'])->name('shop.step1');
Route::get('/shop/{shop}/step2', [App\Http\Controllers\ShopController::class, 'shopStep2'])->name('shop.step2');
Route::get('/shop/{shop}/step3', [App\Http\Controllers\ShopController::class, 'shopStep3'])->name('shop.step3');
Route::get('/shop/{shop}/success', [App\Http\Controllers\ShopController::class, 'shopSuccess'])->name('shop.success');
Route::get('/shop/{shop}/failure', [App\Http\Controllers\ShopController::class, 'shopFailure'])->name('shop.failure');

// Burger routes
Route::get('/account/', [App\Http\Controllers\UsersController::class, 'index'])->name('account.show');
Route::get('/account/edit', [App\Http\Controllers\UsersController::class, 'edit'])->name('account.edit');
Route::patch('/account/edit', [App\Http\Controllers\UsersController::class, 'update'])->name('account.update');
Route::patch('/account/', [App\Http\Controllers\UsersController::class, 'update'])->name('account.update');
