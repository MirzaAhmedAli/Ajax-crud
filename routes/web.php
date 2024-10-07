<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CategoryController;

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
//  Route::get('test', function () {
//      return view('test');
//  })->name('test');


Route::get('products', [App\Http\Controllers\AjaxController::class, 'index'])->name('page');
Route::get('/subcategories/{id}', [AjaxController::class, 'getSubcategories']);
Route::get('/showcategories', [CategoryController::class, 'getCategories']);
Route::get('imageup', [App\Http\Controllers\AjaxController::class, 'image']);
Route::get('categories',[App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::post('/createcategory',[App\Http\Controllers\CategoryController::class, 'store'])->name('createcat');
Route::post('/createsubcategory',[App\Http\Controllers\SubcategoryController::class, 'store'])->name('createsubcat');
Route::get('subcategories',[App\Http\Controllers\SubcategoryController::class, 'index'])->name('subcategory');



