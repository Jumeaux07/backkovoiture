<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
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

Route::get('/login',[AuthController::class,'loginForm'])->name('login');
Route::post('/connexion',[AuthController::class,'login'])->name('connexion');

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
    ######################################## VOITURE ######################################
    Route::get('/voiture',[LocationController::class,'voitureListe'])->name('location.voiture')->middleware('auth');
    Route::get('/ajouter-voiture',[LocationController::class,'createVoiture'])->name('location.voiture.create')->middleware('auth');

    ######################################## MARQUE ######################################
    Route::get('/marques',[LocationController::class,'marqueListe'])->name('location.marque')->middleware('auth');
    Route::get('/ajouter-marque',[LocationController::class,'createMarque'])->name('location.marque.create')->middleware('auth');
    Route::get('/store-marque',[LocationController::class,'sotreMaqrue'])->name('location.marque.store')->middleware('auth');
});

