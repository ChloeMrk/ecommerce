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
    return view('homepage');
});

Route::get('/inscription','App\Http\Controllers\InscriptionsController@inscription');

Route::post('/inscription','App\Http\Controllers\InscriptionsController@inscriptions');


//Connexion
Route::get('/connexion','App\Http\Controllers\ConnexionController@form');

Route::post('/connexion','App\Http\Controllers\ConnexionController@connexion' );


Route::get('/dashboard','App\Http\Controllers\UserAccountController@dashboard');


//Produit

Route::get('/produit','App\Http\Controllers\ProduitsController@show');

Route::post('/produit','App\Http\Controllers\ProduitsController@produit');

Route::get('/produits','App\Http\Controllers\ProduitsController@shoow');

//Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//Recherche
Route::get('/search', 'App\Http\Controllers\ProduitsController@recherche')->name('produit.search');


