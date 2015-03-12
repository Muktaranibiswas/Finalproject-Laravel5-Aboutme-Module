<?php

Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/about', 'AboutController@about');

Route::get('/blog', 'BlogController@index');

Route::get('/contact', 'ContactController@contact');

Route::get('/newuserprofile', 'NuserprofileController@index');

Route::get('/task/index', 'TaskController@index');


Route::get('article/create', 'ArticleController@create');


Route::get('layouts/newuserprofile', 'NuserprofileController@index');


Route::get('/searchResult.index', 'SearchResultController@search');


Route::get('/userprofile', 'UserController@userprofile');

Route::get('/newtimeline', 'NewTimelineController@newtimeline');


Route::get('/timeline', 'TimelineController@index');
Route::get('/timelineold', 'TimelineoldController@index');
Route::get('/faq', 'faqController@index');

Route::get('/blog-item', 'BlogItemController@index');
Route::get('/portfolio', 'PortfolioController@portfolio');
Route::get('/ecom', 'EcommerceController@ecommerce');

Route::get('/mukta', 'MuktaController@index');


Route::resource('projects', 'ProjectsController');

Route::resource('tasks', 'TasksController');
Route::resource('projects.tasks', 'TasksController');


Route::model('tasks', 'Task');
Route::model('projects', 'Project');

// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});
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



