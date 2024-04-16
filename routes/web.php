<?php

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

Route::controller(RouteController::class)->group(function (){
    Route::get('/galeri', 'gallery');
    Route::get('/aktifitas', 'activity');
    Route::get('/kontak', 'contact');
});

Route::controller(GalleryController::class)->group(function(){
    
});
