<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post.avatar/{filename}', [App\Http\Controllers\AdminController::class, 'getavatar'])->name('getavatar');




//Auth::user()->name getinfo
Route::get('/edit', [App\Http\Controllers\UserController::class, 'index'])->name('edit');

Route::put('/edita', [App\Http\Controllers\UserController::class, 'update'])->name('edita');

Route::get('/editpass', [App\Http\Controllers\UserController::class, 'updatepass'])->name('editpass');




//EDITAR ROLES
Route::get('/edit-role', [App\Http\Controllers\AdminController::class, 'index'])->name('edit-role');

//Route::get('/edita-role', [App\Http\Controllers\AdminController::class, 'indexupdate'])->name('edita-role');
//Route::get('/editaa-role', [App\Http\Controllers\AdminController::class, 'update'])->name('editaa-role');







//imgnova

Route::get('/imgnova', [App\Http\Controllers\ImageController::class, 'penja'])->name('imgnova');

Route::put('/imgnovaa', [App\Http\Controllers\ImageController::class, 'penjaimg'])->name('imgnovaa');


Route::get('/image/{filename}', [App\Http\Controllers\UserController::class, 'getimage'])->name('avatar');


//Reserva

Route::get('/res', [App\Http\Controllers\ReservaController::class, 'index'])->name('reserva');
//enlace pocho, como he comentado en el drive
Route::get('/res-exemple', [App\Http\Controllers\ReservaController::class, 'index2'])->name('res');

//Restaurant

Route::get('/menu-dia', [App\Http\Controllers\RestaurantController::class, 'menu'])->name('menu');

Route::get('/carta', [App\Http\Controllers\RestaurantController::class, 'carta'])->name('carta');