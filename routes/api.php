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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/projects', 'Api\ProjectsController@index');
Route::group(['namespace' => 'Api'], function(){
    Route::get('/projects', 'ProjectsController@index')->name('projects');
    Route::get('/project/{project}', 'ProjectsController@show')->name('show.project');
});
//Route::apiResource('/projects', 'Api\ProjectsController');
Route::apiResource('/tasks', 'Api\TasksController');
Route::apiResource('/users', 'Api\UsersController');
