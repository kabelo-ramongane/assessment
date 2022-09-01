<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['cors', 'json.response']], function () {

    //public routes
    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/register','Auth\ApiAuthController@register')->name('register.api');
    Route::post('/upload-content','Auth\UploadsController@importData')->name('upload.api');
    Route::post('/update-content','Auth\UploadsController@updateData')->name('update.api');
    Route::get('/export','Auth\EmployeesExportController@export')->name('export.api');
    Route::get('/index','Auth\EmployeesExportController@index')->name('index.api');
    //Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');
});

/*Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');
});*/


/*Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
Route::post('/register','Auth\ApiAuthController@register')->name('register.api');
Route::post('/upload-content','Auth\UploadsController@importData')->name('upload.api');
Route::post('/update-content','Auth\UploadsController@updateData')->name('update.api');
Route::get('/export','Auth\EmployeesExportController@export')->name('export.api');
Route::get('/index','Auth\EmployeesExportController@index')->name('index.api');
//Route::post('/upload-content','Auth\UploadsController@importData')->name('upload.api');

Auth::routes(['upload-content' => false]);
