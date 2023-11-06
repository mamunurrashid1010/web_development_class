<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\HomeController;
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

# --------------------------------------- website -------------------------------------------------------
Route::get('/',[HomeController::class,'index'])->name('website.home');


# --------------------------------------- admin panel -------------------------------------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    # dashboard
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    # hero
    Route::get('/hero',[HeroController::class,'index'])->name('hero');
    Route::get('/hero/create',[HeroController::class,'create'])->name('hero.create');
    Route::post('/hero/store',[HeroController::class,'store'])->name('hero.store');
    Route::get('/hero/edit',[HeroController::class,'edit'])->name('hero.edit');

});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
