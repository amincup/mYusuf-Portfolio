<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Auth;
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

//main pages
Route::get('/', [HomeController::class, 'main']);
Route::get('/resume', [HomeController::class, 'resume'])->name('pages.resume');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('pages.detailsPorto');

//admin pages
Route::get('/porto/images/{id}', [PortoController::class, 'images'])->name('porto.images');
Route::get('/porto/remove-img/{id}', [PortoController::class, 'removeImg']);
Route::post('/porto/add-img/{id}', [PortoController::class, 'updateImg']);

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//protected from not login
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/porto', PortoController::class)->middleware('auth');
