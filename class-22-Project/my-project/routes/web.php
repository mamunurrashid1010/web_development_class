<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\WebsiteAboutController;
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
Route::get('/about-page',[WebsiteAboutController::class,'index'])->name('website.about.index');


# --------------------------------------- admin panel -------------------------------------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    # dashboard
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    # hero
    Route::get('/hero',[HeroController::class,'index'])->name('hero');
    Route::get('/hero/create',[HeroController::class,'create'])->name('hero.create');
    Route::post('/hero/store',[HeroController::class,'store'])->name('hero.store');
    Route::get('/hero/edit',[HeroController::class,'edit'])->name('hero.edit');
    Route::post('/hero/update',[HeroController::class,'update'])->name('hero.update');
    # about
    Route::get('/about',[AboutController::class,'index'])->name('about.index');
    Route::get('/about/create',[AboutController::class,'create'])->name('about.create');
    Route::post('/about/store',[AboutController::class,'store'])->name('about.store');
    Route::get('/about/edit',[AboutController::class,'edit'])->name('about.edit');
    Route::post('/about/update',[AboutController::class,'update'])->name('about.update');
    # testimonial
    Route::get('/testimonial',[TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('/testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
    Route::post('/testimonial/store',[TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::post('/testimonial/update/{id}',[TestimonialController::class,'update'])->name('testimonial.update');
    Route::get('/testimonial/delete/{id}',[TestimonialController::class,'delete'])->name('testimonial.delete');

});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
