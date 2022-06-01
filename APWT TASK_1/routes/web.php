<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

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


Route::get('/page/index/landing', [pageController::class, 'home'])->name('home');
Route::get('/team', [pageController::class, 'team'])->name('team');
Route::get('/contactus', [pageController::class, 'contactus'])->name('contactus');
Route::get('/aboutus', [pageController::class, 'aboutus'])->name('aboutus');
Route::get('/product/service', [pageController::class, 'product'])->name('product');