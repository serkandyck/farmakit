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

Route::middleware(['auth:web'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('settings', 'SettingsController@index')->name('settings');
    Route::post('settings/update-password', 'UserController@changePassword')->name('updatePassword');

    Route::middleware(['is_admin'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', function () {
                // Matches The "/admin/users" URL
            });
        });
    });

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

Auth::routes(['register' => false]);
