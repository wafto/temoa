<?php

Route::get('admin/login', 'Admin\SessionsController@create');
Route::get('admin/logout', 'Admin\SessionsController@destroy');
Route::resource('admin/sessions', 'Admin\SessionsController', ['only' => ['create', 'store', 'destroy']]);

Route::group(['prefix' => 'admin', 'before' => ['auth.admin', 'csrf.forms']], function()
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

Route::group(['prefix' => 'api/v1', 'before' => ['auth.api']], function()
{

    Route::resource('cursos', 'Api\V1\CoursesController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);

});



// Rutas Front


// Vsita Home
Route::get('/', function(){
    return View::make('front.static.home');
});

// Vista Aliados
Route::get('aliados', function(){
    return View::make('front.static.aliados');
});

// Vista Conócenos
Route::get('conocenos', function(){
    return View::make('front.static.conocenos');
});

// Vista Contáctanos
Route::get('contactanos', function(){
    return View::make('front.static.contactanos');
});

// Vista Login
Route:: get('login', function(){
    return View::make('front.static.login');
});

// Vista Logout
Route::get('logout', function(){
    return View::make('front.static.logout');
});

// Vista Profile
Route::get('profile', function(){
    return View::make('front.static.profile');
});

// Vista Continuar
Route::get('continuar', function(){
    return View::make('front.static.confirmation');
});

// Vista actualidad
Route::get('actualidad', function(){
    return View::make('front.static.actualidad');
});

// Vista de detalle curso
Route::get('curso', function(){
    return View::make('front.static.detalle-curso');
});


Route::get('oferta-academica', function(){
    return View::make('front.static.oferta-academica');
});

