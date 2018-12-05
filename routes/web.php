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

Route::get('/', 'CtglController@home')->name('home_path');

Route::get('/ctgl', 'CtglController@presentation')->name('presentation_path');
Route::get('/activite', 'CtglController@activite')->name('activite_path');
Route::get('/evenement', 'CtglController@evenement')->name('evenement_path');
Route::get('/adherer', 'CtglController@adherer')->name('adherer_path');

Route::get('/contact', 'CtglController@contact')->name('Contact_path');
Route::post('/contact', 'CtglController@store')->name('Contact_path');




/* Gestion de l'authentification des utilisateurs */

Auth::routes();





/* Gestion de la partie administration */

Route::group(['prefix' => 'UQXuT3x', 'middleware' => 'auth'], function() {

    Route::group(['middleware' => ['panelAdminAuthorize']], function () {

        Route::get('/panel', 'adminController@index')->name('panelAdmin');

        Route::get('/pagesAdmin/{idPage}', 'adminController@showUpdatePage')->name('showUpdatePage');
        Route::post('/pagesAdmin', 'adminController@storePages')->name('updatePage');

        Route::get('/updateAcceuilAdmin', 'adminController@showUpdateAcceuil')->name('showUpdateAcceuil');
        Route::post('/updateAcceuilAdmin', 'adminController@storeAcceuil')->name('updateAcceuil');

    });

});
