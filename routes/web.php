<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'index'])->name('index');

//routes pages
Route::get('/cookies', [PublicController::class, 'cookies'])->name('cookies');
Route::get('/lavori', [PublicController::class, 'work'])->name('work');
Route::get('/lavoro/{id}', [PublicController::class, 'workDetail'])->name('progetto');
Route::get('/azienda', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');


//routes services
Route::get('/servizi', [PublicController::class, 'services'])->name('service');
Route::get('/servizio/{id}', [PublicController::class, 'serviceDetail'])->name('dettaglio');

