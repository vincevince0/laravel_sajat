<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\ModelController;

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

Route::resource('makers',MakerController::class);
Route::resource('fuels',MakerController::class);
Route::resource('bodies',ModelController::class);
Route::resource('vehicles',MakerController::class);
Route::resource('models',MakerController::class);

//Route::get('/makers.destroy/{id}',[MakerController::class,'delete_maker']);

//Route::get('/models', [ModelController::class, 'index'])->name('models.index');

//Route::get('\makers', [MakerController::class, 'index'])->name('makers.index');

/* Route::get('/', function () {
    return view('welcome');
}); */
