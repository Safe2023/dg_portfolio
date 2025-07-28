<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\Rvd_emailController;
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
Route::get('/parcour', function () {
    return view('parcour');
});



Route::post('/rendez-vous', [Rvd_emailController::class, 'envoyer'])->name('rdv_email');
Route::post('/contact-email', [Rvd_emailController::class, 'envoiedemail'])->name('envoiedemail');
