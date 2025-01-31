<?php


use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::get('/admin/dashboard', function () {
        return "Welcome to the Admin Dashboard!";
    });
    
    Route::get('/admin/settings', function () {
        return "Admin Settings Page";
    });
});
