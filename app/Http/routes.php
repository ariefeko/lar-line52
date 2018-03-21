<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('prefix' => 'api'), function () {
    Route::get('/', function (Request $request) {
        logger("message request : ", $request->all());
    });

    // Route::post('/', ['as' => 'line.bot.message', 'uses' => 'GetMessageController@getMessage']);
    Route::post('/', ['as' => 'line.bot.message', 'uses' => 'GetMessageController@botEngine']);
});