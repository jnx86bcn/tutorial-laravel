<?php

Route::get('/', 'PagesController@index');

Route::get('blog','PagesController@blog' )->name('blog');

Route::get('photos', 'PagesController@photos')->name('photos');

Route::get('about-us/{employee?}', 'PagesController@aboutUs')->name('about-us');
