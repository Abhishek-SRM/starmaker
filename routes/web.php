<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('login');});

Route::get('/login',[AdminController::class,'login']);

Route::get('/dashboard',[DashboardController::class,'dashboard']);

Route::get('/manageuser',[DashboardController::class,'manageuser']);

Route::get('/subscription',[DashboardController::class,'subscription']);

Route::get('/viewtopup',[DashboardController::class,'viewtopup']);

Route::get('/addtopup', [DashboardController::class,'addtopup']);

Route::post('/addpack', [DashboardController::class,'addpack']);

