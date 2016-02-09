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
Route::get('/', function(){
	return redirect()->route('tasks.index');
});
Route::get('auth/login', ['as' => 'auth.index', 'middleware' => 'guest', 'uses' => 'SiteController@login']);
Route::post('auth/login', ['as' => 'auth.login', 'middleware' => 'guest', 'uses' => 'SiteController@signin']);
Route::get('auth/logout', ['as' => 'auth.logout', 'middleware' => 'auth', 'uses' => 'SiteController@logout']);
Route::get('auth/register', ['as' => 'auth.create', 'middleware' => 'guest', 'uses' => 'SiteController@register']);
Route::post('auth/register', ['as' => 'auth.register', 'middleware' => 'guest', 'uses' => 'SiteController@store']);

Route::resource('tasks', 'TaskController');
Route::get('tasks/getcrawl/{id?}', ['as' => 'tasks.download', 'uses' => 'TaskController@getTexts']);
Route::get('crawling/{id?}', ['as' => 'crawl.crawling', 'uses' => 'CrawlController@crawl']);
