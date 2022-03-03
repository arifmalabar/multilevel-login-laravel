<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\User\Main;

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

Route::get('/', [Login::class, 'index'])->name("login")->middleware("guest");
Route::post('/login', [Login::class, 'on_login']);
Route::get("/dashboard", [Dashboard::class, 'index'])->middleware("is_admin");
Route::get("/index", [Main::class, 'index'])->middleware("is_user");
Route::get("/logout", [Login::class, 'on_logout']);
