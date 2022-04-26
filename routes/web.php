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
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware('isLogged');
Route::get('admin/applicant', [AdminController::class, 'applicantindex'])->middleware('isLogged');
Route::get('admin/loss', [AdminController::class, 'lossindex'])->middleware('isLogged');
Route::get('admin/damaged', [AdminController::class, 'damagedindex'])->middleware('isLogged');
Route::get('admin/track', [AdminController::class, 'trackindex'])->middleware('isLogged');
Route::get('admin/benefit', [AdminController::class, 'benefitindex'])->middleware('isLogged');
Route::get('admin/fieldoffice', [AdminController::class, 'fieldofficeindex'])->middleware('isLogged');
Route::get('admin/list', [AdminController::class, 'listindex'])->middleware('isLogged');
Route::get('admin/user', [AdminController::class, 'userindex'])->middleware('isLogged');
Route::match(['get', 'post'], '/admin/adduser', [AdminController::class, 'adduser'])->middleware('isLogged');
Route::match(['get', 'post'], '/admin/updateuser', [AdminController::class, 'updateuser'])->middleware('isLogged');
Route::match(['get', 'post'], '/admin/userstatusactivate/{id}', [AdminController::class, 'changeUserStatus']);
Route::match(['get', 'post'], '/admin/userstatusdeactivate/{id}', [AdminController::class, 'changeUserStatus1']);
