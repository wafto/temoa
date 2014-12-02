<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'admin', 'before' => []], function()
{

    Route::group(['prefix' => 'usuarios'], function()
    {
        Route::get('servidores-publicos/{id}/delete', 'Admin\User\CivilServantsController@delete');
        Route::resource('servidores-publicos', 'Admin\User\CivilServantsController');

        Route::get('socios-tecnologicos/{id}/delete', 'Admin\User\PartnersController@delete');
        Route::resource('socios-tecnologicos', 'Admin\User\PartnersController');

        Route::get('admins-dependencia/{id}/delete', 'Admin\User\DependenciesAdminsController@delete');
        Route::resource('admins-dependencia', 'Admin\User\DependenciesAdminsController');

        Route::get('admins-temoa/{id}/delete', 'Admin\User\AdminsController@delete');
        Route::resource('admins-temoa', 'Admin\User\AdminsController');
    });

    Route::get('dependencias/{id}/delete', 'Admin\DependenciesController@delete');
    Route::resource('dependencias', 'Admin\DependenciesController');

    Route::get('cursos/{id}/delete', 'Admin\CoursesController@delete');
    Route::resource('cursos', 'Admin\CoursesController');

    Route::resource('contactos', 'Admin\ContactsController');

});
