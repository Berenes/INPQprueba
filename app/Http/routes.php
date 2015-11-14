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

Route::get('/', function () {
		return view('users.login');
	});

//seteamos el idioma seleccionado por el usuario
Route::get("language/{locale}", function ($locale) {
		Session::set('locale', $locale);
		return redirect()->back();
	});

//mapeamos el controlador UserController
Route::controller('users', 'UserController');

Route::group(array('middleware' => ['auth']), function ($group) {
		Route::controller('dashboard', 'DashboardController');
		Route::controller('vendedores', 'VendedoresController');
		Route::controller('clients', 'ClientsController');
		Route::controller('data_clients', 'DataClientController');
		Route::controller('familys', 'FamilyController');
		Route::controller('sub_familys', 'SubFamilyController');
		Route::controller('marks', 'MarkController');
		Route::controller('products', 'ProductController');
		Route::controller('advanced_queries', 'QuerieController');

	});
