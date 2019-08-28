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
Route::get('/', function(){
	if (isset(Auth::user()->role)) {
		if (Auth::user()->role == 1) {
			return redirect()->route('home');
		}
		elseif (Auth::user()->role == 0) {
			return redirect()->route('user.home');
		}
	}	
	else{
		return view('auth/login');
	}
});

//admin
Route::group(['middleware' => ['auth','rolecheckadmin']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/datatable', 'DataController@ReadDataTable')->name('datatable.read');
	Route::get('/datatable/{id}', 'DataController@DetailDataTable')->name('datatable.detail');
	Route::get('/editdatatable/{id}', 'DataController@EditDataTable')->name('datatable.edit');
	Route::post('/datatable/edit/post', 'DataController@PostEditDataTable')->name('datatable.edit.post');
	Route::post('/datatable/delete', 'DataController@DeleteDataTable')->name('datatable.delete');
	Route::post('/datatable/post', 'DataController@PostDataTable')->name('datatable.post');
	Route::get('/datagrafik', 'DataController@ReadDataGrafik')->name('datagrafik.read');
	Route::get('/datamaps', 'DataController@ReadDataMaps')->name('datamaps.read');
	Route::post('/datatable-search', 'DataController@SearchData')->name('search_data'); 
 });

//user
Route::group(['prefix' => 'user','middleware' => ['auth','rolecheckuser']], function() {
   	Route::get('/home', 'UserHomeController@index')->name('user.home');
   	Route::get('/datatable', 'UserDataController@ReadDataTable')->name('user.datatable');
	Route::get('/datatable/{id}', 'UserDataController@DetailDataTable')->name('user.datatable-detail');
	Route::get('/datagrafik', 'UserDataController@ReadDataGrafik')->name('user.datagrafik');
	Route::get('/datamaps', 'UserDataController@ReadDataMaps')->name('user.datamaps');
	Route::post('/datatable-search', 'UserDataController@SearchData')->name('user.search_data');
});


Auth::routes();




