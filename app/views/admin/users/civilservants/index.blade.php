@extends('layouts.dashboard')

@section('body')

  <div class="row">
    <div class="col-md-12 margin-bottom text-right">
      <a href="#" class="btn btn-default">
        <span class="glyphicon glyphicon-plus"></span> Nuevo Servidor Público
      </a>
    </div>
  </div>
  <br/>
  <div class="panel panel-default">
    <div class="panel-body table-panel">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ sortBy('Admin\User\CivilServantsController@index', 'id', 'Id') }}</th>
            <th>{{ sortBy('Admin\User\CivilServantsController@index', 'name', 'Nombre') }}</th>
            <th>{{ sortBy('Admin\User\CivilServantsController@index', 'surnames', 'Appellidos') }}</th>
            <th>{{ sortBy('Admin\User\CivilServantsController@index', 'dependency_id', 'Dependencia') }}</th>
            <th>{{ sortBy('Admin\User\CivilServantsController@index', 'area', 'Area') }}</th>
            <th>{{ sortBy('Admin\User\CivilServantsController@index', 'job', 'Puesto') }}</th>
            <th>{{ sortBy('Admin\User\CivilServantsController@index', 'created_at', 'Creado') }}</th>
            <th>{{ sortBy('Admin\User\CivilServantsController@index', 'updated_at', 'Actualizado') }}</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <body>
        @foreach ($users->getItems() as $user)
          <tr>
            <td>{{{ $user->id }}}</td>
            <td>{{{ $user->name }}}</td>
            <td>{{{ $user->surnames }}}</td>
            <td>{{{ $user->dependency->name }}}</td>
            <td>{{{ $user->area }}}</td>
            <td>{{{ $user->job }}}</td>
            <td>{{{ $user->created_at }}}</td>
            <td>{{{ $user->updated_at }}}</td>
            <td>
              <div class="btn-group btn-group-xs pull-right">
                <a href="#" class="btn btn-default">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a href="#" class="btn btn-default">
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="#" class="btn btn-default">
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
      {{ $users->appends(Request::except('page'))->links() }}
    </div>
  </div>

@stop