<?php

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

Route::get('/', function () {
    return view('layouts.main');
});
// @@@@@@@@@@@@@@@@@@@@@@@@@@@ Admin Side Routes@@@@@@@@@@@@@@@@@@@@@@@@@@@
Route::get('/admin', function () {
    return view('admin-dashboard.layouts.base');
});
// @@@@@@@@@@@@@@@@@@@@@@@@@@@ Admin Side Routes@@@@@@@@@@@@@@@@@@@@@@@@@@@

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// @@@@@@@@@@@@@@@ resource full routes@@@@@@@@@@@
Route::resource('schedules','App\Http\Controllers\ScheduleController'); //done
Route::resource('speclizations','App\Http\Controllers\SpecilizationController'); //done
Route::resource('types','App\Http\Controllers\TypesController'); //done
Route::resource('type_users','App\Http\Controllers\TypeUserController'); //done
// @@@@@@@@@@@@@@@ resource full routes@@@@@@@@@@@