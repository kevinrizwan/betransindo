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

Route::get('login', 'AuthController@index')->name('login');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_login', 'AuthController@proses_login')->name('proses_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['checkRole:staff']], function () {
        Route::get('staff', 'staff\DashboardController@index')->name('staff');
        Route::get('staff/tiket', 'staff\TiketController@index')->name('staff.tiket');
        Route::get('staff/tiket/detroy/{id}', 'staff\TiketController@destroy')->name('staff.tiket.destroy');
        Route::get('staff/cekin', 'staff\CekinController@index')->name('cekin');
        Route::get('staff/cekin/show', 'staff\CekinController@show')->name('cekin.show');
        Route::post('staff/cekin/update/{id}', 'staff\CekinController@update')->name('cekin.update');
        Route::get('staff/konser', 'staff\KonserController@index')->name('konser');
        Route::get('staff/konser/add', 'staff\KonserController@create')->name('konser.add');
        Route::post('staff/konser/store', 'staff\KonserController@store')->name('konser.store');
    });
    Route::group(['middleware' => ['checkRole:penonton']], function () {
        Route::get('penonton', 'penonton\DashboardController@index')->name('penonton');
        Route::get('penonton/tiket', 'penonton\TiketController@index')->name('tiket');
        Route::get('penonton/pesan', 'penonton\PesanController@index')->name('pesan');
        Route::get('penonton/pesan/add/{id}', 'penonton\PesanController@create')->name('pesan.add');
        Route::post('penonton/pesan/store', 'penonton\PesanController@store')->name('pesan.store');
    });
});


Route::get('/', function () {
    return view('validation.login');
});
