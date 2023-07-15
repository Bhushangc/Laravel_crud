<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resourceController;
use App\Models\Crud;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource('crud',resourceController::class);
Route::get('/delete', function () {
    return view('index');
});