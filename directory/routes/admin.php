<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Location\DistrictController;
use App\Http\Controllers\Admin\Location\DivisionController;
use App\Http\Controllers\Admin\Location\UnionController;
use App\Http\Controllers\Admin\Location\UpazilaController;
use App\Http\Controllers\Admin\User\PermissionManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application.
|
*/

Route::group(['prefix' => 'admin'], function () {
    // /admin redirect into /admin/dashboard
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    // Unauthenticated user authentication route and guest middleware for redirection
    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('/login', [AuthController::class, 'index'])->name('admin.login');
        Route::post('/login', [AuthController::class, 'store'])->name('admin.login');
    });

    // Authenticated user route and admin.auth middleware
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        // User Management Routes
        Route::name('user-management.')->group(function () {
            Route::resource('/user-management/permissions', PermissionManagementController::class);
        });

        // Location Management Routes
        Route::name('location.')->group(function () {
            Route::resource('/location/divisions', DivisionController::class);
            Route::resource('/location/districts', DistrictController::class);
            Route::resource('/location/upazilas', UpazilaController::class);
            Route::resource('/location/unions', UnionController::class);
        });
    });
});
