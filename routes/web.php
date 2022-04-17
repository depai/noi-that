<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\RockController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\User\CategoryController as UserCategoryController;
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

    Route::get('products/datatable', [AdminProductController::class, 'datatable'])->name('products.datatable');
    Route::resource('products', AdminProductController::class);
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

Route::prefix('')->group(function () {
    route::get('/', [HomeController::class, 'indexHome'])->name('dashboard');
    Route::prefix('product')->group(function () {
        route::get('/{slug}', [ProductController::class, 'productDetail'])->name('product.detail');
    });
    Route::prefix('category')->group(function () {
        route::get('/{slug}', [UserCategoryController::class, 'viewCategory'])->name('view.category');
    });
});

Route::post('upload-image', [UploadImageController::class, 'store'])->name('upload_image');
