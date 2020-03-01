<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function(){
    return view('blog');
})->name('blog');

Route::get('photos', function(){
    return view('photos');
})->name('photos');

Route::get('about-us/{employee?}', function($employee = null) {

    $team = ['Ignacio','Juan','Jose'];

    // return view('about-us',['team'=>$team],'employee'=>$employee]);
    return view('about-us',compact('team','employee'));
})->name('about-us');
