<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\UsersController;
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
    return view('front.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.service');
});
Route::get('/project', function () {
    return view('pages.project');
});

Route::get('/dashboard', function () {
    return view('Admin.index');
});

Route::get('/register',[RegisterController::class,'showregistre'])->name('show.register');
Route::post('/register',[RegisterController::class, 'register'])->name('register');
Route::get('/login',[LoginController::class,'showlogin'])->name('show.login');
Route::post('/login',[LoginController::class,'login'])->name('login');


Route::resource('category', CategoriesController::class);

Route::resource('user', UsersController::class);

// Employee Routes...
Route::get('/Employee/form', [EmployeeController::class, 'showEmployeeForm'])->name('Employee.form');
Route::post('/Employee/store', [EmployeeController::class, 'storeEmployeeInfo'])->name('Employee.store');
