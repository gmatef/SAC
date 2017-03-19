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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin'],function()
{
	Route::resource('typePeople','TypePeopleController');
	Route::get('typePeople/{id}/destroy',[
		'uses'	=>'typePeopleController@destroy',
		'as'	=>'admin.typePeople.destroy'
	]);

	Route::resource('provinces','ProvincesController');
	Route::get('provinces/{id}/destroy',[
		'uses'	=>'ProvincesController@destroy',
		'as'	=>'admin.provinces.destroy'
	]);

	Route::resource('permissions','PermissionsController');
	Route::get('permissions/{id}/destroy',[
		'uses'	=>'PermissionsController@destroy',
		'as'	=>'admin.permissions.destroy'
	]);

	Route::resource('cities','CitiesController');
	Route::get('cities/{id}/destroy',[
		'uses'	=>'CitiesController@destroy',
		'as'	=>'admin.cities.destroy'
	]);

	Route::resource('people','PeopleController');
	Route::get('people/{id}/destroy',[
		'uses'	=>'PeopleController@destroy',
		'as'	=>'admin.people.destroy'
	]);

	Route::resource('administrators','AdministratorsController');
	Route::get('administrators/{id}/destroy',[
		'uses'	=>'AdministratorsController@destroy',
		'as'	=>'admin.administrators.destroy'
	]);

	Route::resource('items','ItemsController');
	Route::get('items/{id}/destroy',[
		'uses'	=>'ItemsController@destroy',
		'as'	=>'admin.items.destroy'
	]);

	Route::resource('providers','ProvidersController');
	Route::get('providers/{id}/destroy',[
		'uses'	=>'ProvidersController@destroy',
		'as'	=>'admin.providers.destroy'
	]);

	Route::resource('expensetypes','ExpenseTypesController');
	Route::get('expensetypes/{id}/destroy',[
		'uses'	=>'ExpenseTypesController@destroy',
		'as'	=>'admin.expensetypes.destroy'
	]);





	Route::resource('expenses','ExpensesController');
	Route::get('expenses/{id}/destroy',[
		'uses'	=>'ExpensesController@destroy',
		'as'	=>'admin.expenses.destroy'
	]);

});
