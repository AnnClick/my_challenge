<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\mybodyController;

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
Route::get('/m', function () {
    return view('header.main');
});
Route::post('/body',[mybodyController::class, 'add']);
Route::get('/body',function () {
    return view('recordBody.record_body');
});
Route::get('/tbody',[mybodyController::class, 'show']);

Route::get('/bmi',function () {
    return view('bmi');
});
Route::get('/his',function () {
    return view('history_cha');
});
