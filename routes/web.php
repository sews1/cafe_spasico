<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;

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

// Public Routes
Route::get('/', function () {
    return view('home.main');
})->name('home');

// Static Pages
Route::view('/about', 'home.about')->name('about');
Route::view('/menu', 'home.menu')->name('menu');
Route::view('/testimonials', 'home.testimonials')->name('testimonials');
Route::view('/contact', 'home.contact')->name('contact');

// Authentication Routes
Auth::routes();

// Route untuk Login
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Custom Redirect After Login
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->middleware('admin')
        ->name('admin.dashboard');
});

// Route untuk Logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
