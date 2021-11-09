<?php

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

use Illuminate\Support\Facades\Route;

Route::resource('/', LoginPageController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/petani', PetaniController::class);
Route::resource('/kebun', KebunController::class);
Route::resource('/kopi', JenisController::class);
Route::resource('/pemetaan', PemetaanController::class);



// Route::POST('/dashboard', function () {
//     return view('main.index',[
//        'title' => 'Dashboard | Kopi Tani'
//     ]);
// });
