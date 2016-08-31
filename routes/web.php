<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'ContactsController@all');
Route::post('/contacts', 'ContactsController@create');
Route::get('/contacts/edit/{id}', 'ContactsController@read');
Route::post('/contacts/edit/{id}', 'ContactsController@update');
Route::get('/contacts/delete/{id}', 'ContactsController@delete');

Route::get('/lists', 'GroupsController@index');
Route::post('/lists', 'GroupsController@create');
Route::get('/lists/edit/{id}', 'GroupsController@read');
Route::post('/lists/edit/{id}', 'GroupsController@update');
Route::get('/lists/delete/{id}', 'GroupsController@delete');


Route::get('/campaigns', 'CampaignsController@index');
Route::post('/campaigns', 'CampaignsController@create');
Route::get('/campaigns/edit/{id}', 'CampaignsController@read');
Route::post('/campaigns/edit/{id}', 'CampaignsController@update');
Route::get('/campaigns/delete/{id}', 'CampaignsController@delete');

Route::get('/api/list', 'GroupsController@list');


Auth::routes();

Route::get('/home', 'ContactsController@all');

Route::get('/redirect', 'SocialAuthController@redirectToProvider');
Route::get('/callback', 'SocialAuthController@handleProviderCallback');
