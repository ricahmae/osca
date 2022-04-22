<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//APPLICANT MODULE
Route::get('/applicant', [App\Http\Controllers\ApplicantController::class, 'applicantindex']);

//LOGIN MODULE
Route::get('/', [UserAuthController::class, 'login'])->middleware('AlreadyLoggedIn'); //login route
Route::post('/auth/check', [UserAuthController::class, 'check'])->name('auth.check');
Route::get('/logout', [UserAuthController::class, 'logout']);


//ADMIN MODULE
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware('isLogged');  //admin dashboard route
Route::get('admin/dashboard2', [AdminController::class, 'dashboard2'])->middleware('isLogged'); //admin patient index route

