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

Route::get('/list', function () {
    return view('users.list');
});

Route::get('/detail', function () {
    return view('users.detail');
});

Route::get('/collection', function () {
    return view('users.collection');
});

Route::get('/about-us', [HomeController::class,'viewAboutUs'])->name('view.about.us');

Route::get('/contacts', [HomeController::class, 'viewContactUs'])->name('view.contact.us');

Route::get('/news', function () {
    return view('users.news');
});

Route::get('/press', function () {
    return view('users.press');
});

Route::post('/ckeditor', [DashboardController::class, 'index'])->name('ckeditor.upload');

Route::group(['middlware' => 'noDebugbar'], function () {
    // Route::get("sitemap.xml", "Frontend\SitemapController@index")->name('sitemap.index');
});

Route::prefix('')->group(function () {

    route::get('/', [HomeController::class, 'indexHome'])->name('home');
    Route::prefix('product')->group(function () {
        route::get('/{slug}', [ProductController::class, 'productDetail'])->name('product.detail');
    });
    Route::prefix('category')->group(function () {
        route::get('/{slug}', [UserCategoryController::class, 'viewCategory'])->name('view.category');
    });
    Route::prefix('collection')->group(function () {
        route::get('/{slug}', [UserCategoryController::class, 'viewCollection'])->name('view.detail.collection');
    });
});

Route::post('upload-image', [UploadImageController::class, 'store'])->name('upload_image');

Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::post('/remove-to-cart', [ProductController::class, 'removeToCart'])->name('remove_to_cart');
Route::post('/check-out', [ProductController::class, 'checkout'])->name('checkout');
