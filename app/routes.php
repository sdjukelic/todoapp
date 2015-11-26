<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('page1','page1controller@get_index');

Route::get('task','page1controller@get_task');

Route::get('done','page1controller@get_done');

Route::get('undone','page1controller@get_undone');

Route::get('new','page1controller@get_new');

Route::post('new','page1controller@post_new');

Route::post('update/{id}','page1controller@post_update');

Route::get('deleteform/{id}','page1controller@get_deleteform');

Route::post('deleteform/delete/{id}','page1controller@post_delete');