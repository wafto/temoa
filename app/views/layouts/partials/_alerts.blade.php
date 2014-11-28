@if (Session::has('flash_message'))
  @foreach (Session::get('flash_message') as $key => $message)

    @if ($key == 'success')
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Success!</strong> {{ $message }}
      </div>
    @endif

    @if ($key == 'info')
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Information!</strong> {{ $message }}
      </div>
    @endif

    @if ($key == 'warning')
      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Warning!</strong> {{ $message }}
      </div>
    @endif

    @if ($key == 'danger')
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Danger!</strong> {{ $message }}
      </div>
    @endif

  @endforeach
@endif
