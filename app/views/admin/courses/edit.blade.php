@extends('layouts.dashboard')

@section('body')

  @include('admin.courses._form', ['title' => 'Editar Curso', 'action' => ['Admin\CoursesController@update', $course->id], 'method' => 'put', 'model' => $course])

@stop