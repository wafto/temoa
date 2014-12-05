@extends('layouts.dashboard')

@section('body')

  @include('admin.courses._form', ['title' => 'Nuevo Curso', 'action' => 'Admin\CoursesController@store', 'method' => 'post', 'model' => null])

@stop