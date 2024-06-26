<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RouteController;
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
    return view('views.index');
});

Route::controller(RouteController::class)->group(function () {
    Route::get('/galeri', 'gallery');
    Route::get('/aktifitas', 'activity');
    Route::get('/kontak', 'contact');
    Route::get('/admin/dashboard', 'admin')->middleware('auth:sanctum');
    Route::get('/admin/activity', 'adminActivity')->middleware('auth:sanctum');
    Route::get('/admin/gallery', 'adminGallery')->middleware('auth:sanctum');
    Route::get('/admin/inbox', 'adminInbox')->middleware('auth:sanctum');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/signin', 'loginPage')->name('login');
    Route::post('/login', 'login');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::controller(GalleryController::class)->group(function () {
        Route::post('/admin/gallery/create', 'store');
    });

    Route::controller(ActivityController::class)->group(function(){
        Route::post('/admin/activity/create', 'store');
        Route::post('/admin/activity/edit/{id}', 'update');
        Route::post('/admin/activity/delete/{id}', 'destroy');
    });
});


