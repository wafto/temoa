<div class="row">
  <div class="col-md-4 col-md-offset-4">

    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Eliminar {{ $type }}</h3>
      </div>
      <div class="panel-body">
        <p>
          Desea realmente eliminar {{ $display }}?
        </p>
        {{ Form::open(['action' => [$controller.'@destroy', $model->id], 'method' => 'delete', 'role' => 'form']) }}
          <div class="row">
            <div class="col-md-6">
              {{ link_to_action($controller.'@index', 'Cancelar', null, ['class' => 'btn btn-lg btn-primary btn-block']) }}
            </div>
            <div class="col-md-6">
              {{ Form::submit('Eliminar', ['class' => 'btn btn-lg btn-danger btn-block']) }}
            </div>
          </div>
        {{ Form::close() }}
      </div>
    </div>

  </div>
</div>
