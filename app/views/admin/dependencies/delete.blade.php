@extends('layouts.dashboard')

@section('body')

  @include('layouts.partials._delete', ['type' => 'Dependencia', 'display' => $dependency->name, 'controller' => 'Admin\DependenciesController', 'model' => $dependency])

@stop