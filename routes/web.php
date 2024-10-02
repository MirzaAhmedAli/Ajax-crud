<?php

use App\Http\Controllers\AjaxController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('test', function () {
//     return view('test');
// })->name('test');


Route::get('products', [App\Http\Controllers\AjaxController::class, 'index'])->name('page');
Route::get('/subcategories/{id}', [AjaxController::class, 'getSubcategories']);
Route::get('imageup', [App\Http\Controllers\AjaxController::class, 'image']);


