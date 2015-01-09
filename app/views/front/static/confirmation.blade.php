@extends('front.base')


@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="text-align: center; min-height: 300px;">
	<h2>Estás a punto de solicitar tu inscripción a una capacitación.</h2>
	<p>Una notificación será enviada al encargado de su dependencia.</p>
	<button id="continuar" class="btn btn-default">Continuar</button>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	(function(){
		$('#continuar').on('click', function(){
			window.location = '/profile';
		});
	})();
</script>
@stop