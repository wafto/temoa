@extends('layouts.dashboard')

@section('body')

  @include('admin.dependencies._form', ['title' => 'Editar Dependencia', 'action' => ['Admin\DependenciesController@edit', $model->id], 'method' => 'put', 'model' => $model])

@stop