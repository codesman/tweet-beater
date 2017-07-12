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
})->name('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/{provider}', 'Auth\LoginController@redirectToProvider')->name('provider');
Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('provider.callback');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('tweet', 'TweetController', [
        'names' => [
            'index' => 'tweet.index',
            'show' => 'tweet.show',
            'create' => 'tweet.create',
            'store' => 'tweet.save',
            'edit' => 'tweet.edit',
            'update' => 'tweet.update',
            'destroy' => 'tweet.delete',
        ]
    ]);
});


