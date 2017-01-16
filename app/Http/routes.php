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

	Route::get('/edit/index',           'BackController@getIndexPage');
	Route::get('/edit/study',           'BackController@getStudy');
	Route::get('/edit/service',         'BackController@getServices');
	Route::get('/edit/equipment',         'BackController@getEquipment');

	Route::get('/edit/all',           	'BackController@getAll');
	Route::get('/edit/facts',           'BackController@getFacts');
	Route::get('/edit/clients',         'BackController@getClients');
	Route::get('/edit/safety',          'BackController@getSafety');
	Route::get('/edit/news',            'BackController@getNews');

	Route::get('/edit/contacts',        'BackController@getContacts');
	Route::get('/edit/about',        'BackController@getAbout');


	Route::get('/edit/service/{id}',    'BackController@editService');
	Route::get('/edit/course/{id}',      'BackController@editCourse');
	Route::get('/edit/news/{id}',       'BackController@editNews');




});

Route::get('/', 'FrontController@getIndex');
Route::get('/study', 'FrontController@getStudy');
Route::get('/study/{slug}', 'FrontController@getStudyItem');

Route::get('/services', 'FrontController@getServices');
Route::get('/services/{slug}', 'FrontController@getServiceItem');

Route::get('/contacts', 'FrontController@getContacts');
Route::get('/about', 'FrontController@getAbout');


