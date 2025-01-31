<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\TaskController;

use App\Http\Controllers\EmployeeController;

Route::get('index', [CustomAuthController::class, 'dashboard']); 
Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::middleware('guest')->group(function () {
    Route::get('/', [CustomAuthController::class, 'index'])->name('login');
    // Route::get('/login', [CustomAuthController::class, 'index'])->name('user.login');
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
});

Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('index');
        })->name('dashboard');
        Route::get('/index', function () {
            return view('index');
        })->name('index');
        Route::get('/employee-dashboard', function () {
            return view('employee-dashboard');
        })->name('employee-dashboard');
        Route::get('/deals-dashboard', function () {
            return view('deals-dashboard');
        })->name('deals-dashboard');
        Route::controller(EmployeeController::class)->as('employee.')->prefix('employees')->group(function () {
            Route::get('/', 'index')->name('list');
            Route::match(['get', 'post'], '/add', 'save')->name('add');
            Route::match(['get', 'post'], '/delete', 'delete')->name('delete');
            Route::match(['get', 'post'], '/edit/{uuid}', 'edit')->name('edit');
        });
        Route::controller(TaskController::class)->as('task.')->prefix('tasks')->group(function () {
            Route::get('/', 'index')->name('list');
            Route::match(['get', 'post'], '/add', 'save')->name('add');
            Route::match(['get', 'post'], '/delete', 'delete')->name('delete');
            Route::match(['get', 'post'], '/edit/{uuid}', 'edit')->name('edit');
        });
        Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

});