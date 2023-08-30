<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Livewire\DashboardComponent;
use App\Livewire\UserComponent;
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

// Route::get('/login',[AuthController::class,'loginForm'])->name('login');
// Route::post('/connexion',[AuthController::class,'login'])->name('connexion');

// Route::prefix('admin')->middleware(['auth'])->group(function(){
//     Route::get('/',[DashboardController::class,'index'])->name('home')->middleware('auth');
// });
Route::get('/login',[AuthController::class,'loginForm'])->name('login');
Route::post('/connexion',[AuthController::class,'login'])->name('connexion');

Route::get('/dashboard', DashboardComponent::class)->name('dashboard')->middleware('auth');
Route::get('/utilisateurs', UserComponent::class)->name('users.index')->middleware('auth');

