@extends('layouts.dashboard')

@section('body')

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Información de Contacto</h3>
      </div>
      <div class="panel-body">

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <b>Nombre:</b> {{{ $contact->name }}}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <b>Correo electrónico:</b> {{{ $contact->email }}}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <b>Sitio web:</b> {{{ $contact->website }}}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <b>Titulo:</b> {{{ $contact->title }}}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <b>Mensaje:</b>
              <br/>
              {{{ $contact->message }}}
            </div>
          </div>
        </div>

      </div>
    </div>

@stop