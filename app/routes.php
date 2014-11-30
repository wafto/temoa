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
        Route::resource('servidores-publicos', 'Admin\User\CivilServantsController');

        Route::resource('socios-tecnologicos', 'Admin\User\PartnersController');

        Route::resource('admins-dependencia', 'Admin\User\DependenciesAdminsController');

        Route::resource('admins-temoa', 'Admin\User\AdminsController');
    });


    Route::resource('dependencias', 'Admin\DependenciesController');

    Route::resource('cursos', 'Admin\CoursesController');

    Route::resource('contactos', 'Admin\ContactsController');

});
