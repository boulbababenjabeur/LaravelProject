<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoneVertesController;
use App\Http\Controllers\associationController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\BenevoleController;
use App\Http\Controllers\AdherentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Route::resource('/', ZoneVertesController::class);
Route::resource('/zoneVertes', ZoneVertesController::class);
Route::resource('/association', associationController::class);
Route::resource('/evenement', EvenementController::class);
Route::resource("/benevole", BenevoleController::class);
Route::resource('/adherent', AdherentController::class);

Route::get('/association/pdf/{id}',[associationController::class,'createpdf']);
Route::resource('/search',associationController::class);

Route::get('/zoneVertes/pdf/{id}',[ZoneVertesController::class,'createpdf']);
Route::resource('/search',ZoneVertesController::class);

Route::get('/evenement/pdf/{id}',[EvenementController::class,'createpdf']);
Route::resource('/search',EvenementController::class);

Route::get('/benevole/pdf/{id}',[EvenementController::class,'createpdf']);
Route::resource('/search',EvenementController::class);

Route::get('/adherent/pdf/{id}',[AdherentController::class,'createpdf']);
Route::resource('/search',AdherentController::class);