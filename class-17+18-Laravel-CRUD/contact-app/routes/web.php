<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CategoriesController;

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

// contacts
Route::get('/contact',[ContactsController::class,'index'])->name('contact.index');
Route::get('/contact/form',[ContactsController::class,'create'])->name('contact.form');
Route::post('/contact/store',[ContactsController::class,'store'])->name('contact.store');
Route::get('/contact/edit/{id}',[ContactsController::class,'edit'])->name('contact.edit');
Route::post('/contact/update/{id}',[ContactsController::class,'update'])->name('contact.update');
Route::get('/contact/delete/{id}',[ContactsController::class,'delete'])->name('contact.delete');


// category
Route::get('/category',[CategoriesController::class,'index'])->name('category.index');
Route::get('/category/create',[CategoriesController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoriesController::class,'store'])->name('category.store');
