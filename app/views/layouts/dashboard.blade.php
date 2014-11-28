@extends('layouts.admin')

@section('stylesheets')
  @parent
  <style>
    body {
      margin-top: 70px;
    }
    #temoa-logo {
      height: 45px;
      margin: -10px 0 0 0;
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