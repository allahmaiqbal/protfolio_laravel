<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\project;
use App\Http\Controllers\MainController;
// use App\Http\Controllers\ResumeController;
// use App\Http\Controllers\ProtfolioController;
// use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[MainController::class,'hello']);
// Route::get('/resumepage',[ResumeController::class,'resume']);
// Route::get('/protfoliotpage',[ProtfolioController::class,'protfilio']);
//Route::get('/contactpage',[ContactController::class,'contact']);


