<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* http://localhost/laravel5/public/ */
Route::get('/', 'PostController@index');

/* http://localhost/laravel5/public/accueil */
Route::resource('accueil', 'PostController', ['as' => 'accueil']);

//Route::resource('user', 'UserController');

//Route::resource('article', 'ArticleController', ['except' => ['show', 'edit', 'update']]);

//Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);

/* http://localhost/laravel5/public/post */
/* A SUPPRIMER */
//Route::resource('post', 'PostController');

Route::resource('news', 'NewsController');

Route::resource('dossier', 'DossierController');

/*Route::get('article/{id}', ['as' => 'article', function () {
    return view('focuslife-article');
}]);*/

//Route::get('post/{id}', ['as' => 'article', 'PostController@show']);

//Route::get('actualite/{id}', ['as' => 'news', 'NewsController@show']);

//Route::get('dossier/{id}', ['as' => 'folder', 'FolderController@show']);

Route::get('contact', ['as' => 'contact', function () {
    return view('focuslife-contact');
}]);

/*Route::get('dossiers', ['as' => 'dossiers', function () {
    return view('focuslife-dossiers');
}]);*/

Route::get('inprogress', ['as' => 'inprogress', function () {
    return view('focuslife-inprogress');
}]);