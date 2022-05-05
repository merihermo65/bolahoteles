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

Route::get('/post/{filename}', [App\Http\Controllers\HomeController::class, 'getimagee'])->name('getimagee');



//Auth::user()->name getinfo
Route::get('/edit', [App\Http\Controllers\UserController::class, 'index'])->name('edit');

Route::put('/edita', [App\Http\Controllers\UserController::class, 'update'])->name('edita');

Route::get('/editpass', [App\Http\Controllers\UserController::class, 'updatepass'])->name('editpass');

//imagenes carta
Route::get('/entr/{filename}', [App\Http\Controllers\CartaController::class, 'getimageE'])->name('getimageEE');

Route::get('/prim/{filename}', [App\Http\Controllers\CartaController::class, 'getimagePP'])->name('getimagePP');

Route::get('/postre/{filename}', [App\Http\Controllers\CartaController::class, 'getimageP'])->name('getimageP');


//EDITAR ROLES
Route::get('/edit-role', [App\Http\Controllers\AdminController::class, 'index'])->name('edit-role');

//Route::get('/edita-role', [App\Http\Controllers\AdminController::class, 'indexupdate'])->name('edita-role');
Route::get('/editaa-role/{filename}', [App\Http\Controllers\AdminController::class, 'update'])->name('editaa-role');

//crear platos

Route::get('/crea_plat', [App\Http\Controllers\CartaController::class, 'index'])->name('plat');

Route::put('/crear', [App\Http\Controllers\CartaController::class, 'update'])->name('crear');


Route::get('/carta', [App\Http\Controllers\CartaController::class, 'show'])->name('carta');


//crear menu

Route::get('/crea_menu', [App\Http\Controllers\MenuController::class, 'index'])->name('dia');

Route::put('/Menu_created', [App\Http\Controllers\MenuController::class, 'update'])->name('crearM');

Route::get('/menu-dia', [App\Http\Controllers\MenuController::class, 'show'])->name('menu');


//imgnova

Route::get('/imgnova', [App\Http\Controllers\EventoController::class, 'penja'])->name('imgnova');

Route::put('/imgnovaa', [App\Http\Controllers\EventoController::class, 'penjaimg'])->name('imgnovaa');


Route::get('/image/{filename}', [App\Http\Controllers\UserController::class, 'getimage'])->name('avatar');


//Reserva

Route::get('/resD', [App\Http\Controllers\ReservaController::class, 'index'])->name('reservaDinar');
//enlace pocho, como he comentado en el drive
Route::get('/resS', [App\Http\Controllers\ReservaController::class, 'index2'])->name('reservaSopar');

//Restaurant



