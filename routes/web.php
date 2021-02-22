<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\Controller;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Controller::class)->name('umbroshop.home');

Route::resource('umbroshop', ArticulosController::class);

Route::get('umbroshop/nosotros', [ContactanosController::class, 'nosotros'])->name('umbroshop.contactanos.nosotros');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('umbroshop.contactanos.index');

Route::post('contactanos',  [ContactanosController::class, 'store'])->name('umbroshop.contactanos.store');
//esta vista la esta tomando el controlador Contactanos, metodo nosotros
Route::view('nosotros', 'layouts.nosotros')->name('nosotros'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('compra','/compra')->name('umbroshop.compra');

Route::post('umbroshop/category/create', [Controller::class, 'guardar'])->name('category.create');

Route::get('category/{category}', [ArticulosController::class, 'category'])->name('articulos.category');



