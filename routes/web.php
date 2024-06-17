<?php

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
    return view('accueil');
})->name('accueil');;


Route::get('/about', function () {
    return view('about');
})->name('about');;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

Route::get('/services', function () {
    return view('services');
})->name('services');;

Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');;


use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/masteradmin', function () {
    return view('masteradmin');
})->name('masteradmin');


Route::get('/liste_camion', function () {
    return view('admin.camion.liste_camion');
})->name('liste_camion');


Route::get('/contactadmin', function () {
    return view('contactadmin');
})->name('contactadmin');

Route::get('/create_camion', function () {
    return view('admin.camion.create_camion');
})->name('create_camion');





