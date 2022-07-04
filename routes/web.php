<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Home;
use App\Http\Livewire\Usuarios;
use App\Http\Livewire\Productos;
use App\Http\Livewire\Roles;
use App\Http\Livewire\Ventas\Ventas;
use App\Http\Livewire\Ventas\NuevaVenta;
use App\Http\Controllers\UserController;


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
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Administration
    Route::get('/users/all', Usuarios::class)->name('users.all');
    Route::resource('users', UserController::class)->names('users');

});
