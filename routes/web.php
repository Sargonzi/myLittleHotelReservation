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
Auth::routes();


//Route::get('/', 'HomeController@index')->name('admin');

Route::get('/404', 'StaticController@notfound')->name('not_found');

Route::namespace('Admin')->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('admin');
    Route::resource('users', 'UserController');
    Route::resource('bookings', 'BookingController');
    Route::get('booking/download/{id}', 'BookingController@download')->name('bookings.download');
    Route::resource('rooms', 'RoomController');
    Route::resource('roomtypes', 'RoomTypeController');
    Route::resource('reports', 'ReportController');
    Route::get('email/send/{id}', 'BookingController@email')->name('bookings.email');
});


Route::namespace('Client')->group(function () {
    Route::get('/', 'ClientController@index')->name('clients.home');
    Route::get('profile', 'ClientController@profile')->name('clients.profile');
    Route::get('booking', 'BookingController@index')->name('clients.booking');
    Route::get('room', 'RoomController@index')->name('clients.room');
    Route::get('room/{id}/detail', 'RoomController@show')->name('clients.room.detail');
});
