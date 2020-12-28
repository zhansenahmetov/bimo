<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
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


Route::middleware(['admin'])->prefix('admin')->group(function (){

    // pages
    Route::get('/', [AdminController::class, 'show_main'])->name('show_main_admin');
    Route::get('/users', [AdminController::class, 'show_users'])->name('show_users_admin');
    Route::get('/manufactors', [AdminController::class, 'show_manufactors'])->name('show_manufactors_admin');
    Route::get('/products', [AdminController::class, 'show_products'])->name('show_products_admin');
    Route::get('/orders', [AdminController::class, 'show_orders'])->name('show_orders_admin');

    //pages_end

    // admin_action
    Route::post('/manufactor/update', [AdminController::class, 'update_manufactor'])->name('update_manufactor_admin');




    // admin_action_end
    

});



Route::get('/login', [SiteController::class, 'show_login'])->name('show_login');
Route::get('/logout', [SiteController::class, 'get_logout'])->name('get_logout');
Route::post('/login/put', [SiteController::class, 'get_login'])->name('get_login');


