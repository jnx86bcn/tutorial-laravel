<?php

Route::get('/', 'PagesController@index') ->name('home');

Route::post('/', 'PagesController@create') ->name('notes.create');

Route::get('/detail/{id}', 'PagesController@detail') ->name('notes.details');

Route::get('blog','PagesController@blog' )->name('blog');

Route::get('photos', 'PagesController@photos')->name('photos');

Route::get('about-us/{employee?}', 'PagesController@aboutUs')->name('about-us');
