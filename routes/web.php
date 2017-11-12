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


/* --------------------- For Authentication ------------------------- */
Auth::routes();
Route::get('/home', 'Controller@welcome');


/* --------------------- For Admin Panel ---------------------------- */

Route::group(['middleware' => 'auth'], function() {

	Route::get('/admin', 'Controller@admin');
  	Route::resource('admin/menu', 'MenuController');
	Route::resource('admin/module', 'ModuleController');
	Route::resource('admin/article', 'ArticleController');

	
	/* --------------------- For AJAX Datas------------------------- */

	Route::get('/getModules', 'ModuleController@ListModule');
	Route::get('/allMenu', 'MenuController@AllMenuAction');
	Route::get('/ajaxArticle', 'ArticleController@ajaxArticle');

});


/* --------------------- For Web ---------------------------- */

Route::get('/', 'Controller@welcome');






