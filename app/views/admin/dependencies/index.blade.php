@extends('layouts.dashboard')

@section('body')

  <div class="row">
    <div class="col-md-12 margin-bottom text-right">
      <a href="{{ action('Admin\DependenciesController@create') }}" class="btn btn-default">
        <span class="glyphicon glyphicon-plus"></span> Nueva Dependencia
      </a>
    </div>
  </div>
  <br/>
  <div class="panel panel-default">
    <div class="panel-body table-panel">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ sortBy('Admin\DependenciesController@index', 'id', 'Id') }}</th>
            <th>{{ sortBy('Admin\DependenciesController@index', 'name', 'Nombre de la Dependencia') }}</th>
            <th>{{ sortBy('Admin\DependenciesController@index', 'responsable', 'Nombre del Responsable') }}</th>
            <th>{{ sortBy('Admin\DependenciesController@index', 'created_at', 'Creado') }}</th>
            <th>{{ sortBy('Admin\DependenciesController@index', 'updated_at', 'Actualizado') }}</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <body>
        @foreach ($dependencies as $item)
          <tr>
            <td>{{{ $item->id }}}</td>
            <td>{{{ $item->name }}}</td>
            <td>{{{ $item->responsable }}}</td>
            <td>{{{ $item->created_at }}}</td>
            <td>{{{ $item->updated_at }}}</td>
            <td>
              <div class="btn-group btn-group-xs pull-right">
                <a href="{{ action('Admin\DependenciesController@show', $item->id) }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a href="{{ action('Admin\DependenciesController@edit', $item->id) }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{ action('Admin\DependenciesController@destroy', $item->id) }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
              </div>
            </td>
          </tr>
        @endforeach
        </body>
      </table>
    </div>
    <div class="panel-footer">

    </div>
  </div>

@stop