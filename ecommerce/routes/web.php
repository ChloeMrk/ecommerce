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

Route::get('/', 'App\Http\Controllers\ProduitsController@homepage');

//Inscription

Route::get('/inscription','App\Http\Controllers\InscriptionsController@inscription');

Route::post('/inscription','App\Http\Controllers\InscriptionsController@inscriptions');

//Route groupe

Route::group([
    'middleware'=>'App\Http\Middleware\Auth',
],function(){
    Route::get('/dashboard','App\Http\Controllers\UserAccountController@dashboard');
    Route::get('/signout','App\Http\Controllers\UserAccountController@signout');

    Route::get('/password_modification','App\Http\Controllers\UserAccountController@form_password_modification');
    Route::post('/password_modification','App\Http\Controllers\UserAccountController@password_modification');
});

//Connexion
Route::get('/connexion','App\Http\Controllers\ConnexionController@form');

Route::post('/connexion','App\Http\Controllers\ConnexionController@connexion' );




//Produit

Route::get('/produit','App\Http\Controllers\ProduitsController@creation'); //Afficher le formulaire pour créer un produit

Route::post('/produit','App\Http\Controllers\ProduitsController@produit'); //Envoyer les donnée à la base de donnée

Route::get('/produits','App\Http\Controllers\ProduitsController@catalogue'); //Afficher tout les produits de la table produits

Route::get('show/{id}','App\Http\Controllers\ProduitsController@show')->name('showProduit');//Afficher le produit qui correspond à l'id

//Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//Recherche
Route::get('/search', 'App\Http\Controllers\ProduitsController@recherche')->name('produit.search');


//Ajout un produit en panier

Route::get('panier','App\Http\Controllers\CartController@index')->name('cart.index');

Route::post('/panier/ajouter','App\Http\Controllers\CartController@store')->name('cart.store');
Route::delete('/panier/{id}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');
Route::get('/videpanier',function(){
    Cart::destroy();
});