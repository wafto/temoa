@extends('layouts.dashboard')

@section('body')

  <div class="row">
    <div class="col-md-12 margin-bottom text-right">
      <a href="#" class="btn btn-default">
        <span class="glyphicon glyphicon-plus"></span> Nuevo Administrador
      </a>
    </div>
  </div>
  <br/>
  <div class="panel panel-default">
    <div class="panel-body table-panel">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ sortBy('Admin\User\AdminsController@index', 'id', 'Id') }}</th>
            <th>Correo</th>
            <th>Extension</th>
            <th>Teléfono</th>
            <th>Teléfono Celular</th>
            <th>{{ sortBy('Admin\User\AdminsController@index', 'created_at', 'Creado') }}</th>
            <th>{{ sortBy('Admin\User\AdminsController@index', 'updated_at', 'Actualizado') }}</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <body>
        @foreach ($users->getItems() as $user)
          <tr>
            <td>{{{ $user->id }}}</td>
            <td>{{{ $user->user->email }}}</td>
            <td>{{{ $user->user->ext }}}</td>
            <td>{{{ $user->user->phone }}}</td>
            <td>{{{ $user->user->mobile_phone }}}</td>
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