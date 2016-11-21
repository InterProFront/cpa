<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function(){

	Route::get('/', 					'BackController@getIndex');

	Route::get('/edit/all',           	'BackController@getAll');
	Route::get('/edit/slider',          'BackController@getSlider');
	Route::get('/edit/about',           'BackController@getAbout');
	Route::get('/edit/service',         'BackController@getService');
	Route::get('/edit/facts',           'BackController@getFacts');
	Route::get('/edit/clients',         'BackController@getClients');
	Route::get('/edit/study',           'BackController@getStudy');
	Route::get('/edit/safety',          'BackController@getSafety');
	Route::get('/edit/news',            'BackController@getNews');
	Route::get('/edit/contacts',        'BackController@getContacts');


	Route::get('/edit/service/{id}',    'BackController@editService');
	Route::get('/edit/course/{id}',      'BackController@editCourse');
	Route::get('/edit/news/{id}',       'BackController@editNews');




});

Route::get('/', 'FrontController@getIndex');
Route::get('/study', 'FrontController@getStudy');
Route::get('/study/item', 'FrontController@getStudyItem');

Route::get('/tb', 'FrontController@getTb');
Route::get('/contacts', 'FrontController@getContacts');
Route::get('/services', 'FrontController@getServices');

Route::get('/news', 'FrontController@getNews');
Route::get('/news/more/{id}', 'FrontController@getMore');
Route::get('/news/{agr}/more/{id}', 'FrontController@getMoreAgr');
Route::get('/news/{agr}', 'FrontController@getNewsAgr');
