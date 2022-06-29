<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;

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

//HOME START
Route::get('/', [Controller::class, 'index']);
//HOME END
// LOGIN START
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'authenticate']);
// LOGIN END
// ADMIN START
Route::get('/admindashboard', [adminController::class, 'index']);
Route::get('/adminregister', [adminController::class, 'register']);
// ADMIN END
