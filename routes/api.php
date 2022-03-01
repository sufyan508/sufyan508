<?php

use Illuminate\Http\Request;

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


Route::prefix('user')->name('user/')->group(static function() {
    Route::prefix('tasks')->name('tasks/')->group(static function() {
        Route::get('/',                                             'TaskController@index')->name('index');
        Route::get('/create',                                       'TaskController@create')->name('create');
        Route::post('/store',                                       'TaskController@storeTask')->name('store');
        Route::put('/task-sortable',                                'TaskController@updateTaskOrder')->name('updateTask');
        Route::delete('delete/{taskId}',                            'TaskController@destroy')->name('destroy');
    });
});
