<?php

use App\Http\Controllers\ProfileController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function () {      //Direcciones de Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('/','index')->name('dashboard');
});

Route::middleware(['auth','role:admin','role:user'])->group(function(){
   
    
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('/category','index')->name('category.index');
    Route::get('/category/create','create')->name('category.create');
    Route::post('/category','store')->name('category.store');
    Route::get('/category/{category}/edit','edit')->name('category.edit');
    Route::put('/category/{category}','update')->name('category.update');
    Route::get('/category/{category}/delete','destroy')->name('category.destroy');
});

Route::controller(TagController::class)->group(function(){
    Route::get('/tag','index')->name('tag.index');
    Route::get('/tag/create','create')->name('tag.create');
    Route::post('/tag','store')->name('tag.store');
    Route::get('/tag/{id}/edit','edit')->name('tag.edit');
    Route::put('/tag{id}','update')->name('tag.update');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/product','index')->name('product.index');
    Route::get('/product/search','search')->name('product.search');
    Route::get('/product/create','create')->name('product.create');
    Route::post('/product','store')->name('product.store');
    Route::get('/product/{product}','show')->name('product.show');
    Route::get('/product/{product}/edit','edit')->name('product.edit');
    Route::put('/product{product}','update')->name('product.update');
    Route::get('/product/{product}/delete','destroy')->name('product.destroy');
    
});



require __DIR__.'/auth.php';
