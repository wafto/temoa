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
<div style="text-align: center;">
	<h2>Esta a punto de solicitar una suscripción a un curso</h2>
	<p>Una notificación sera enviada a el encargado de su dependencia.</p>
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