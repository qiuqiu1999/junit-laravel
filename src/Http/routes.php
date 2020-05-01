<?php

Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');


Route::get('/test', 'TestController@index');