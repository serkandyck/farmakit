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

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

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

