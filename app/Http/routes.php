<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('prefix' => 'api'), function () {
    Route::get('get-message', function (Request $request) {
        logger("message request : ", $request->all());
    });

    Route::post('get-message', ['as' => 'line.bot.message', 'uses' => 'GetMessageController@getMessage']);
});