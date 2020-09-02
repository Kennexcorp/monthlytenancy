<?php

use Illuminate\Support\Facades\Route;

include('web_builder.php');

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

Route::get('/login', 'AppBaseController@rerouteLogin')->name('login');
Route::get('/logout', 'AppBaseController@logout')->name('logout');

Route::namespace('Frontend')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::get('/about', 'AppController@about')->name('about');
    Route::get('/contact', 'AppController@contact')->name('contact');
    Route::get('/contact/property={property?}', 'AppController@contactProperty')->name('contact.property');

    Route::name('member.')->group(function () {
        Route::get('/', 'AppController@home')->name('home');
    });

    Route::resource('profile', 'ProfileController')->only(['edit']);
    Route::resource('rents', 'RentController')->only(['index', 'store']);
    Route::post('profile/{id}/{type}', 'ProfileController@update')->name('profile.update');

    Route::get('property/{id}', 'PropertyController@viewProperty')->name('property.viewProperty');

    Route::name('auth.')->group(function () {

        Route::get('/login', 'AuthController@login')->name('login');
        Route::post('/authenticate', 'AuthController@authenticate')->name('login.authenticate');
        Route::get('/signup', 'AuthController@signup')->name('signup');
        Route::post('/register', 'AuthController@register')->name('register');

    });

});
// Route::resource('property', 'PropertyController')->only(['index', 'show']);

Route::namespace('Backend')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::prefix('admin')->group(function () {

        Route::get('/login', 'AuthController@login')->name('login');
        Route::name('admin.')->group(function () {
            Route::get('/', 'AppController@home')->name('home');
            Route::resource('property', 'PropertyController');
            Route::resource('users', 'UserController');
            Route::resource('settings', 'SettingsController');
            Route::resource('requests', 'InspectionRequestController');

            Route::name('auth.')->group(function () {


                Route::post('/authenticate', 'AuthController@authenticate')->name('login.authenticate');

            });
        });

    });

});

// Route::get('users', 'Admire2Controller@index');

// Route::post('users', 'Admire2Controller@store');

//crud builder routes
// Route::get('builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

// Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

// Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

// Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

// Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

// Route::post(
//     'generator_builder/generate-from-file',
//     '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
// )->name('io_generator_builder_generate_from_file');

// catch all routes
// Route::get('{name?}', 'Admire2Controller@showView');
