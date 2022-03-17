<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resource('user', StudentController::class);

Route::get('index','App\Http\Controllers\StudentController@index');
Route::get('show/{id}','App\Http\Controllers\StudentController@show');
Route::post('store','App\Http\Controllers\StudentController@store');
Route::get('edit/{id}','App\Http\Controllers\StudentController@edit');
Route::post('update/{id}','App\Http\Controllers\StudentController@update');

/*

crudapi.test/api/index
>>show all student table data
crudapi.test/api/show/1
>>show specific details using 1 which id here
crudapi.test/api/store
>>save name, title
crudapi.test/api/edit/1
>>show data name,title
crudapi.test/api/update/1
>>update name,title data
*/




