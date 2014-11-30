@extends('layouts.dashboard')

@section('body')

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Mostrar Dependencia</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <b>Nombre de la Dependencia:</b>
              <br/>
              {{{ $dependency->name }}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <b>Nombre del Responsable:</b>
              <br/>
              {{{ $dependency->responsable }}}
            </div>
          </div>
        </div>
      </div>
    </div>

@stop