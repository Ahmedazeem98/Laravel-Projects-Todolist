<?php



Route::get('/','todosController@index');

#Route::get('/todo/{id}/delete','todosController@destroy');
Route::resource('todo','todosController');