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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Route::resource('activities', 'ActivityController');
Route::get('activities/my-activities/{type}', [
    'as' => 'activities.index',
    'uses' => 'ActivityController@index'
]);



Route::resource('legalizations', 'LegalizationController');

Route::resource('deposits', 'DepositController');

Route::resource('recharges', 'RechargeController');


Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware'=>'auth'], function () {

    Route::resource('cards', 'CardController');

    Route::resource('providers', 'ProviderController');

    Route::resource('projects', 'ProjectController');

    Route::resource('people', 'PersonController');

    Route::resource('concepts', 'ConceptController');

    Route::resource('sub_concepts', 'SubConceptController');

    Route::resource('sub_concept_categories', 'SubConceptCategoryController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('roles', 'RoleController');

    Route::resource('zones', 'ZoneController');

    Route::resource('approvers', 'ApproverController');
});


Route::group(['prefix' => 'upload-file','middleware'=>'auth'], function () {

    Route::post('legalization', [
        'as' => 'upload.legalization',
        'uses' => 'Legalization_fileController@store'
    ]);
});




