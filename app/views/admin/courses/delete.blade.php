@extends('layouts.dashboard')

@section('body')

  @include('layouts.partials._delete', ['type' => 'Curso', 'display' => $course->name, 'controller' => 'Admin\CoursesController', 'model' => $course])

@stop