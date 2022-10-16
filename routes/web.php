<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TboLoginController;


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
 Route::get('/', [TboLoginController::class, 'authtbo']);


Route::get('/Authenticate',[TboLoginController::class, 'authtbo'])->name('Authenticate.authtbo');
