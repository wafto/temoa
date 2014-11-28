@extends('layouts.admin')

@section('stylesheets')
  @parent
  <style>
    body {
      margin-top: 70px;
    }
  </style>
@stop

@section('content')
  <!-- Dashboard Navbar -->
  @include('layouts.partials._navbar')
  <div class="container">
    @include('layouts.partials._alerts')
    @yield('body')
  </div>
@stop