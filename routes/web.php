<?php

use Illuminate\Support\Facades\Route;
use App\Http\HomeController;
use App\Http\AutomovilController;
use App\Http\LugarController;
use App\Http\RentaController;
use App\Http\SucursalController;
use App\Http\UsuarioController;


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
