<?php
//FrontEnd Routes
Route::get("/products","ProductsController@index");

Route::view('/','home');
Route::view('/{any}','home');
Route::view('/{any}/{any1}','home');



