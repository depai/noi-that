<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::prefix('admin')->group(function () {
    route::get('login', function(){
        return view('admin.auth.login');
    })->name('view.login');

    route::post('login', [AuthController::class, 'login'])->name('login');

    Route::prefix('')->middleware(['auth:admins'])->group(function () {
        route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::get('categories/datatable', [CategoryController::class, 'datatable'])->name('categories.datatable');
    Route::resource('categories', CategoryController::class);

    Route::get('products/datatable', [ProductController::class, 'datatable'])->name('products.datatable');
    Route::resource('products', ProductController::class);
});

Route::get('/', function () {
    return view('users.homepage');
});

Route::get('/list', function () {
    return view('users.list');
});

Route::get('/detail', function () {
    return view('users.detail');
});

Route::post('/ckeditor', [DashboardController::class, 'index'])->name('ckeditor.upload');
