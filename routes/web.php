<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Employee\EmployeeProfileController;
use App\Http\Controllers\Employee\ServiceController;
use App\Http\Controllers\employeur\EmployeurProfileController;
use App\Http\Controllers\frontOffice\categories\ListCategoriesController;
use App\Http\Controllers\frontOffice\employees\ListEmployeeController;
use App\Http\Controllers\frontOffice\services\ListServicesController;
use App\Http\Controllers\frontOffice\services\ServicesController;
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


Route::get('/about', function () {
    return view('front.about');
});
Route::get('/services', function () {
    return view('front.service');
});
Route::get('/project', function () {
    return view('front.project');
});
Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/dashboard', function () {
    return view('Admin.index');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/register',[RegisterController::class,'showregistre'])->name('show.register');
Route::post('/register',[RegisterController::class, 'register'])->name('register');
Route::get('/login',[LoginController::class,'showlogin'])->name('show.login');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// categories routes
Route::resource('category', CategoriesController::class);
Route::resource('user', UsersController::class);

// ListCategories routes ...
Route::get('/categories', [ListCategoriesController::class, 'listCategories'])->name('list-categories');

// Employee Routes...
Route::get('/Employee/form', [EmployeeController::class, 'showEmployeeForm'])->name('Employee.form');
Route::post('/Employee/store', [EmployeeController::class, 'storeEmployeeInfo'])->name('Employee.store');


// Employee Profile Routes...
Route::get('/profile/{userid}', [EmployeeProfileController::class, 'index'])->name('profile.index');

// Service Routes...
Route::get('/add-service',[ServiceController::class,'create'])->name('service.create');
Route::post('/add-service',[ServiceController::class,'store'])->name('service.store');
Route::get('/edit-service/{service}',[ServiceController::class,'edit'])->name('service.edit');
Route::patch('/edit-service/{service}',[ServiceController::class,'update'])->name('service.update');
Route::delete('/delete-service/{id}',[ServiceController::class,'destroy'])->name('service.destroy');

// ListServices routes ...
Route::get('/list-services', [ListServicesController::class, 'listServices'])->name('list-services');

//employeee list 
Route::get('/employee-list', [ListEmployeeController::class, 'listEmployee'])->name('employee.list');


// Employeur Profile Routes...
Route::get('/Employeurprofile', [EmployeurProfileController::class, 'index'])->name('profileEmployeur.index');


// services single page

Route::get('/service/{service}', [ServicesController::class, 'show'])->name('service.show');

