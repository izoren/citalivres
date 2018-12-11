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


/*Route::get('/','PagesController@getIndex');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');
Route::get('/messages','MessagesController@getMessages');


Route::post('/contact/submit','MessagesController@submit');
*/

/*Route::get('/','PagesController@getIndex');
Route::get('/auteurs','PagesController@getAuteurs');
Route::get('/partenaires','PagesController@getPartenaires');
Route::get('/programme','PagesController@getProgramme');
Route::get('/contact','PagesController@getContact');
*/
Route::get('/',['uses' => 'Mots\MotsController@index', 'as' => 'index']);

Route::group(['prefix' => 'auteurs', 'as' => 'auteurs.'],function (){
    Route::get('/', ['uses' => 'Auteurs\AuteurController@index', 'as' => 'invites']);
    Route::get('/invites', ['uses' => 'Auteurs\AuteurController@index', 'as' => 'invites']);
    Route::get('/partenaires',['uses'=>'Auteurs\AuteurController@partenaires','as' => 'partenaires']);
    Route::get('/editeurs',['uses'=>'Auteurs\AuteurController@editeurs','as' => 'editeurs']);
    Route::get('/details',['uses'=>'Auteurs\AuteurController@details','as' => 'details']);
});

Route::get('/partenaires',['uses' => 'Partenaires\PartenairesController@index', 'as' => 'index']);

Route::group(['prefix' => 'contact', 'as' => 'contact.'],function () {
    Route::get('/', ['uses' => 'Contact\ContactController@create', 'as' => 'create']);
    Route::post('/', ['uses' => 'Contact\ContactController@store', 'as' => 'store']);
});