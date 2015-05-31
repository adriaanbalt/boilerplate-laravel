<?php

// Event::listen( 'illuminate.query', function( $sql ){
// 	var_dump($sql);
// });

Route::get('/', 'SetDesignController@index');
Route::get('/sculpture', 'SculptureController@index');
Route::get('/sculpture/{id}', 'SculptureController@details');
Route::get('/setdesign', 'SetDesignController@index');
Route::get('/setdesign/{id}', 'SetDesignController@details');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'AboutController@index');
