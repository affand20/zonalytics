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
    return view('index');
})->name('dashboard');

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/admin/dashboard', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/admin/data-training', function() {
        return view('admin.training');
    })->name('admin.data.training');
    
    Route::get('/admin/data-predict', function() {
        return view('admin.predict');
    })->name('admin.data.predict');    
});


Route::get('/home', 'HomeController@index')->name('home');
