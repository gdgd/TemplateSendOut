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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//管理系
Route::get('/managements/offices/{officesid}/check_lists/','CheckListController@getOfficeList');
Route::post('/managements/offices/{officesid}/check_lists/','CheckListController@update');
Route::get('/managements/offices/{officesid}/check_lists/{id}','CheckListController@get');
Route::put('/managements/offices/{officesid}/check_lists/{id}','CheckListController@add');
Route::delete('/managements/offices/{officesid}/check_lists/{id}','CheckListController@modify');
Route::get('/managements/offices/{officesid}/check_lists/{id}/checked','CheckListController@hasCompleted');

//Office系
Route::get('/offices','Office@getOfficesList');
Route::post('/offices','Office@update');
Route::get('/offices/{id}','Office@get');
Route::put('/offices/{id}','Office@add');
Route::delete('/offices/{id}','Office@modify');

//NFCタグ系
Route::get('/nfctags', 'NfctagsController@getNfcTagsList');
Route::post('/nfctags', 'NfctagsController@update');
Route::get('/nfctags/{id}', 'NfctagsController@get');
Route::delete('/nfctags/{id}', 'NfctagsController@modify');
Route::put('/nfctags', 'NfctagsController@addTagid');
Route::put('/nfctags/{id}/touch', 'NfctagsController@addTouchHistory');
