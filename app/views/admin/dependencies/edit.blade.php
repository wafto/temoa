@extends('layouts.dashboard')

@section('body')

  @include('admin.dependencies._form', ['title' => 'Editar Dependencia', 'action' => ['Admin\DependenciesController@update', $dependency->id], 'method' => 'put', 'model' => $dependency])

@stop