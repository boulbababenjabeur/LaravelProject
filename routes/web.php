<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\participantController;
use App\Http\Controllers\associationController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\VeloController;

// use App\Http\Controllers\AdherentController;

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
Route::resource('/participant', participantController::class);
Route::resource('/association', associationController::class);
Route::resource('/evenement', EvenementController::class);
Route::resource('/velo', VeloController::class);
// Route::resource('/adherent', AdherentController::class);

Route::get('/association/pdf/{id}',[associationController::class,'createpdf']);
Route::resource('/search',associationController::class);

Route::get('/participant/pdf/{id}',[participantController::class,'createpdf']);
Route::resource('/search',participantController::class);

Route::get('/evenement/pdf/{id}',[EvenementController::class,'createpdf']);
Route::resource('/search',EvenementController::class);

Route::get('/velo/pdf/{id}',[VeloController::class,'createpdf']);
Route::resource('/search',VeloController::class);



// Route::get('/adherent/pdf/{id}',[AdherentController::class,'createpdf']);
// Route::resource('/search',AdherentController::class);