<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.master');
});

Route::get('/home', [App\Http\Controllers\Homecontroller::class,'index'])->name('home');

//adminprefixs
Route::prefix('admin')->group(function() {
    Route::get('/', [App\Http\Controllers\Admin\Dashboardcontroller::class,'index']);
});
