<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
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
Route::get('/sample', [SampleController::class, 'index'])->name('index');
Route::post('/posted', [SampleController::class, 'update'])->name('update');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sample', function () {
//     return view('sample');
// });

// Route::post('/posted', function () {
//     return view('posted');
// });
