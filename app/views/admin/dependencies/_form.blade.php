{{ Form::open(['action' => $action, 'role' => 'form', 'method' => $method]) }}
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">{{ $title }}</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              {{ Form::label('name', 'Nombre de la dependencia') }}
              {{ Form::text('name', $model ? $model->name : '', ['class' => 'form-control']) }}
              {{ $errors->first('name', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              {{ Form::label('responsable', 'Persona responsable') }}
              {{ Form::text('responsable', $model ? $model->responsable : '', ['class' => 'form-control']) }}
              {{ $errors->first('responsable', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer text-right">
        {{ link_to_action('Admin\DependenciesController@index', 'Cancelar', null, ['class' => 'btn btn-default']) }}
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
{{ Form::close() }}
