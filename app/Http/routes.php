<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function ()
{

  // Donate Routes
  Route::get('/', ['as' => 'donate', 'uses' => 'Donate@getDonate']);
  Route::post('/', ['uses' => 'Donate@postDonate']);

  // Reporting Routes
  Route::get('/reporting', ['as' => 'reporting', 'uses' => 'Reporting@getReporting']);

});
