<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function (){
    echo "this is home page";
});

#------------------------------------- category ----------------------------
//Route::get('/category', function (){
//    echo "this is category page";
//});

Route::get('/category',[CategoryController::class,'categoryPage']);

//Route::get('/category/details', function (){
//    echo "this is category details page";
//});
Route::get('/category/details',[CategoryController::class,'categoryDetailsPage']);
Route::get('/category/update',[CategoryController::class,'updateCategoryPage']);
Route::get('/category/delete',[CategoryController::class,'deleteCategory']);

//Route::get('/category', function (){
//    return view('category.category');
//});


#------------------------------------- product -------------------------------------
//Route::get('/product', function (){
//    echo "this is product page";
//});
Route::get('/product',[ProductController::class,'productShowPage']);
