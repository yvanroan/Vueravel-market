<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1',  'middleware' => 'api'] , function () {

	//Authentication routes
	Route::post('login', 'API\AuthController@login');
	Route::post('register', 'API\AuthController@register');
	Route::group(['middleware' => 'auth:api'], function(){
		Route::get('myprofile', 'API\AuthController@getProfile');
	});

	//Profile management routes
	Route::apiResource('/profiles', 'API\ProfileController' , [
    	'only' => ['index', 'show', 'update']
	]);


});
