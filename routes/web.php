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
Route::get('/aboutthisapp', function () {
    return view('aboutthisapp');
});

Route::group(['prefix' => 'todo'],function() {
    Route::get('index','TodoController@index')->name('todo.index');
    Route::get('create' , 'TodoController@create')->name('todo.create');
    Route::post('store' , 'TodoController@store')->name('todo.store');
    Route::get('today' , 'TodoController@today')->name('todo.today');
    Route::get('show/{id}','TodoController@show')->name('todo.show');
    Route::get('edit/{id}', 'TodoController@edit')->name('todo.edit');
    Route::post('update/{id}' ,'TodoController@update')->name('todo.update');
    Route::post('destroy/{id}' , 'TodoController@destroy')->name('todo.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'profile'],function() {
    Route::get('setting','ProfileController@edit')->name('profile.edit');
    Route::post('update' , 'ProfileController@update')->name('profile.update');

});

Route::group(['prefix' => 'contact'],function() {
    Route::get('contact','ContactController@index')->name('contact.index');
    Route::post('store' , 'ContactController@store')->name('contact.store');


});
