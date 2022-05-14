<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CollectionController;

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

Route::get('login', function(){
    return view('admin.auth.login');
})->name('view.login');

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth:admins'])->group(function () {
    route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('categories/datatable', [CategoryController::class, 'datatable'])->name('categories.datatable');
    Route::resource('categories', CategoryController::class);

    Route::get('products/datatable', [ProductController::class, 'datatable'])->name('products.datatable');
    Route::resource('products', ProductController::class);

    Route::get('orders/datatable', [OrderController::class, 'datatable'])->name('orders.datatable');
    Route::post('orders/add-item', [OrderController::class, 'addItem'])->name('orders.add_item');
    Route::post('orders/remove-item', [OrderController::class, 'removeItem'])->name('orders.remove_item');
    Route::resource('orders', OrderController::class);

    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'store'])->name('settings.store');

    Route::get('collections/datatable', [CollectionController::class, 'datatable'])->name('collections.datatable');
    Route::resource('collections', CollectionController::class);
});


