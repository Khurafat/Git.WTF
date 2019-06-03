<?php


Route::feeds();

Route::get('/', 'HomeController@index')->name('home');

Route::get('tags/{slug}', 'HomeController@tag')->name('tag');
Route::get('category/{slug}', 'HomeController@category')->name('category');
Route::get('{slug}', 'HomeController@show')->name('post');
