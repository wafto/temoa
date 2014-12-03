@extends('layouts.dashboard')

@section('body')

  <div class="panel panel-default">
    <div class="panel-body table-panel">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ sortBy('Admin\ContactsController@index', 'id', 'Id') }}</th>
            <th>{{ sortBy('Admin\ContactsController@index', 'name', 'Nombre') }}</th>
            <th>{{ sortBy('Admin\ContactsController@index', 'title', 'Titulo') }}</th>
            <th>{{ sortBy('Admin\ContactsController@index', 'created_at', 'Creado') }}</th>
            <th>{{ sortBy('Admin\ContactsController@index', 'updated_at', 'Actualizado') }}</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <body>
        @foreach ($contacts->getItems() as $item)
          <tr>
            <td>{{{ $item->id }}}</td>
            <td>{{{ $item->name }}}</td>
            <td>{{{ $item->title }}}</td>
            <td>{{{ $item->created_at }}}</td>
            <td>{{{ $item->updated_at }}}</td>
            <td>
              <div class="btn-group btn-group-xs pull-right">
                <a href="{{ action('Admin\ContactsController@show', $item->id) }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </a>
              </div>
            </td>
          </tr>
        @endforeach
        </body>
      </table>
    </div>
    <div class="panel-footer">
      {{ $contacts->appends(Request::except('page'))->links() }}
    </div>
  </div>

@stop