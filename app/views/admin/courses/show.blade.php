@extends('layouts.dashboard')

@section('body')

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Mostrar Curso</h3>
      </div>
      <div class="panel-body">

        <div class="row">
          <div class="col-xs-4">
            <div class="form-group">
              <b>Folio Interno:</b>
              <br/>
              {{{ $course->internal_number }}}
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <b>Folio Externo:</b>
              <br/>
              {{{ $course->external_number }}}
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <b>Nombre:</b>
              <br/>
              {{{ $course->name }}}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4">
            <div class="form-group">
              <b>Categoría:</b>
              <br/>
              {{{ $course->category->name }}}
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <b>Socio Tecnológico:</b>
              <br/>
              {{{ $course->partner->business_name }}}
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <b>Duración:</b>
              <br/>
              {{{ $course->duration }}} hora(s)
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4">
            <div class="form-group">
              <b>Fomato:</b>
              <br/>
              {{{ $course->format }}}
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <b>Visible:</b>
              <br/>
              <span class="glyphicon {{ boolIcon($course->visible) }}" aria-hidden="true"></span>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="form-group">
              <b>Cancelado:</b>
              <br/>
              <span class="glyphicon {{ boolIcon($course->cancelled) }}" aria-hidden="true"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <b>Descripción:</b>
              <br/>
              {{{ $course->description }}}
            </div>
          </div>
        </div>

      </div>
    </div>

@stop