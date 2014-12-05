{{ Form::open(['action' => $action, 'role' => 'form', 'method' => $method]) }}
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">{{ $title }}</h3>
      </div>
      <div class="panel-body">

        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              {{ Form::label('internal_number', 'Folio interno') }}
              {{ Form::text('internal_number', $model ? $model->internal_number : '', ['class' => 'form-control']) }}
              {{ $errors->first('internal_number', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              {{ Form::label('external_number', 'Folio externo') }}
              {{ Form::text('external_number', $model ? $model->external_number : '', ['class' => 'form-control']) }}
              {{ $errors->first('external_number', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              {{ Form::label('name', 'Nombre') }}
              {{ Form::text('name', $model ? $model->name : '', ['class' => 'form-control']) }}
              {{ $errors->first('name', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              {{ Form::label('category_id', 'Categoría') }}
              {{ Form::select('category_id', forDropdown(Category::all(), 'name'), $model ? $model->category_id : '', ['class' => 'form-control']) }}
              {{ $errors->first('category_id', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              {{ Form::label('partner_id', 'Socio Tecnológico') }}
              {{ Form::select('partner_id', forDropdown(Partner::all(), 'business_name'), $model ? $model->partner_id : '', ['class' => 'form-control']) }}
              {{ $errors->first('partner_id', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              {{ Form::label('description', 'Descripción') }}
              {{ Form::textarea('description', $model ? $model->description : '', ['class' => 'form-control']) }}
              {{ $errors->first('description', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-6">
            <div class="form-group">
              {{ Form::label('duration', 'Duración') }}
              {{ Form::number('duration', $model ? $model->duration : 0, ['class' => 'form-control']) }}
              {{ $errors->first('duration', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
          <div class="col-xs-6">
            <div class="form-group">
              {{ Form::label('format', 'Formato') }}
              {{ Form::select('format', ['presencial' => 'presencial', 'línea' => 'línea'], $model ? $model->format : 'presencial', ['class' => 'form-control']) }}
              {{ $errors->first('format', '<div class="text-danger">:message</div>') }}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="checkbox">
              <label>
                {{ Form::checkbox('visible', $model ? $model->visible : true, true) }} Visible
              </label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="checkbox">
              <label>
                {{ Form::checkbox('cancelled', $model ? $model->cancelled : false, false) }} Cancelado
              </label>
            </div>
          </div>
        </div>

      </div>
      <div class="panel-footer text-right">
        {{ link_to_action('Admin\CoursesController@index', 'Cancelar', null, ['class' => 'btn btn-default']) }}
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
{{ Form::close() }}
