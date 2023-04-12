<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\User;
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
   
Route::get('/hello/{name}', [HelloController::class, 'Name']);

Route::get('/conta/{number1}/{number2}/{operation?}', [OperationController::class, 'Conta']);

//Route::get('/idade/{ano}/{mes?}/{dia?}', [IdadeController::class, 'Calculo']); ainda não consegui fazer :-(