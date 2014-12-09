@extends('layouts.dashboard')

@section('body')

  <div class="row">
    <div class="col-md-12 margin-bottom text-right">
      <a href="#" class="btn btn-default">
        <span class="glyphicon glyphicon-plus"></span> Nuevo Socio Tecnológico
      </a>
    </div>
  </div>
  <br/>
  <div class="panel panel-default">
    <div class="panel-body table-panel">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ sortBy('Admin\User\PartnersController@index', 'id', 'Id') }}</th>
            <th>{{ sortBy('Admin\User\PartnersController@index', 'business_name', 'Nombre') }}</th>
            <th>{{ sortBy('Admin\User\PartnersController@index', 'responsable', 'Responsable') }}</th>
            <th>{{ sortBy('Admin\User\PartnersController@index', 'rfc', 'RFC') }}</th>
            <th>{{ sortBy('Admin\User\PartnersController@index', 'created_at', 'Creado') }}</th>
            <th>{{ sortBy('Admin\User\PartnersController@index', 'updated_at', 'Actualizado') }}</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <body>
        @foreach ($users->getItems() as $user)
          <tr>
            <td>{{{ $user->id }}}</td>
            <td>{{{ $user->business_name }}}</td>
            <td>{{{ $user->responsable }}}</td>
            <td>{{{ $user->rfc }}}</td>
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