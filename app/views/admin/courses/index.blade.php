@extends('layouts.dashboard')

@section('body')

  <div class="row">
    <div class="col-md-12 margin-bottom text-right">
      <a href="{{ action('Admin\CoursesController@create') }}" class="btn btn-default">
        <span class="glyphicon glyphicon-plus"></span> Nuevo Curso
      </a>
    </div>
  </div>
  <br/>
  <div class="panel panel-default">
    <div class="panel-body table-panel">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ sortBy('Admin\CoursesController@index', 'id', 'Id') }}</th>
            <!--<th>{{ sortBy('Admin\CoursesController@index', 'internal_number', 'Folio Interno') }}</th>-->
            <!--<th>{{ sortBy('Admin\CoursesController@index', 'external_number', 'Folio Externo') }}</th>-->
            <th>{{ sortBy('Admin\CoursesController@index', 'name', 'Nombre del Curso') }}</th>
            <th>{{ sortBy('Admin\CoursesController@index', 'category_id', 'Categoria') }}</th>
            <th>{{ sortBy('Admin\CoursesController@index', 'created_at', 'Creado') }}</th>
            <th>{{ sortBy('Admin\CoursesController@index', 'updated_at', 'Actualizado') }}</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <body>
        @foreach ($courses->getItems() as $item)
          <tr>
            <td>{{{ $item->id }}}</td>
            <!--<td>{{{ $item->internal_number }}}</td>-->
            <!--<td>{{{ $item->external_number }}}</td>-->
            <td>{{{ $item->name }}}</td>
            <td>{{{ $item->category->name }}}</td>
            <td>{{{ $item->created_at }}}</td>
            <td>{{{ $item->updated_at }}}</td>
            <td>
              <div class="btn-group btn-group-xs pull-right">
                <a href="{{ action('Admin\CoursesController@show', $item->id) }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a href="{{ action('Admin\CoursesController@edit', $item->id) }}" class="btn btn-default">
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{ action('Admin\CoursesController@delete', $item->id) }}" class="btn btn-default">
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
      {{ $courses->appends(Request::except('page'))->links() }}
    </div>
  </div>

@stop