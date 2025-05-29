<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;


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
    return view('welcome');
});

Route::get('/admin', function () {
    if (auth()->check()) {
        return redirect('/admin/dashboard');
    }
    return redirect('/admin/login');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/change-password', [AdminController::class, 'showChangePasswordForm'])->name('admin.change-password.form');
    Route::post('/change-password', [AdminController::class, 'changePassword'])->name('admin.change-password');

    Route::get('/page1', [AdminController::class, 'page1'])->name('admin.page1');

    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});

// Route login admin (trang login riêng)
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
