<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/about', 'AboutController@about');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

]);
Route::get('home', 'HomeController@index');
Route::get('/about', 'AboutController@about');
Route::model('teams', 'Team');
Route::model('abouts', 'About');


Route::resource('abouts', 'AboutsController');
Route::resource('teams', 'TeamsController');
Route::resource('abouts.teams', 'TeamsController');


Route::bind('teams', function($value, $route) {
    return App\Team::whereId($value)->first();
});
Route::bind('abouts', function($value, $route) {
    return App\About::whereId($value)->first();
});
Route::get('/lists', 'EditdeleteController@index');
//Route::model('teams', 'Team');
//Route::resource('teams', 'TeamsController');

Route::get('fileentry', 'FileEntryController@index');

Route::get('fileentry/get/{filename}', [
    'as' => 'getentry', 'uses' => 'FileEntryController@get']);

Route::post('fileentry/add',[
    'as' => 'addentry', 'uses' => 'FileEntryController@add']);



