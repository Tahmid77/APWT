<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoggedController;

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
Route::get('/dashboard',[LoggedController::class,'dashboard'])->name('root');
Route::get('/',[StudentController::class,'home'])->name('welcome');
Route::get('/user/details/{id}',[LoggedController::class,'details'])->name('details');
Route::get('/register',[StudentController::class,'registration'])->name('student.registration');
Route::get('/login',[StudentController::class,'login'])->name('student.login');
Route::post('/register',[StudentController::class,'registrationSubmit'])->name('student.registration.submit');
Route::post('/login',[StudentController::class,'loginSubmit'])->name('student.login.submit');
Route::get('/logout',[LoggedController::class,'logout'])->name('logout');