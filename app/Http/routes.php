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
    return view('welcome');
});




Route::resource('/index', 'DatatablesController@getIndex');


//Route::controller('datatables', 'DatatablesController', [
//    'anyData'  => 'datatables.data1',
//    'getIndex' => 'datatables',
//]);



//Route::controller('datatables', 'DatatablesController', [
//    'getDataArray'  => 'datatables.data2',
//    'getIndex' => 'datatables',
//]);


//
Route::controller('datatables', 'DatatablesController', [
    'getAddEdit'  => 'datatables.data3',
    'getIndex' => 'datatables',
]);


//Route::controller('datatables', 'DatatablesController', [
//    'getSearch'  => 'datatables.data4',
//    'getIndex' => 'datatables',
//]);


//Route::controller('datatables', 'DatatablesController', [
//    'getDtRowData'  => 'datatables.data5',
//    'getIndex' => 'datatables',
//]);

Route::resource('/edit-{id}', 'DatatablesController@editProfile');

























