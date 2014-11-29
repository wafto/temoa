@extends('layouts.dashboard')

@section('body')

  @include('admin.dependencies._form', ['title' => 'Nueva Dependencia', 'action' => 'Admin\DependenciesController@store', 'method' => 'post', 'model' => null])

@stop