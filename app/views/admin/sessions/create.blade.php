@extends('layouts.admin')

@section('stylesheets')
  @parent
  <style>
    body {
      background: #f2f2f2;
    }
    .vertical-offset-100 {
      padding-top: 100px;
    }
  </style>
@stop

@section('content')
  <div class="container">
    <div class="row vertical-offset-100">
      <div class="col-md-4 col-md-offset-4">

        @include('layouts.partials._alerts')

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Autenticarse</h3>
          </div>
          <div class="panel-body">
            {{ Form::open(['action' => 'Admin\SessionsController@store', 'role' => 'form']) }}
              <fieldset>
                <div class="form-group">
                  {{ Form::text('email', null, ['type' => 'email', 'class' => 'form-control', 'placeholder' => 'Correo']) }}
                </div>
                <div class="form-group">
                  {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) }}
                </div>
                {{ Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block']) }}
              </fieldset>
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@stop