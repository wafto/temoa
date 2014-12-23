@extends('front.base')

@section('content')

<div id="wrapper"> <!-- Wrapper -->

<!-- Banner -->
<section>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/slide-temoa.jpg" alt="TEMOA Hub">

				<div class="buscador">

					<form id="search-form" action="">
						<p class="wrapper">
							<input class="icon" type="text" placeholder="¿En qué quieres capacitarte?" name="search" class="search-text"/>
						</p>
					</form>

					<div class="copy">
						<p>¡Contamos con los mejores cursos para tí!</p>
					</div>

				</div>


			</div>
		</div>
	</div>
</section>
<!-- Banner -->

<!-- Marketing -->
<div class="container marketing">

	<!-- Testimonios -->
	<div class="row">

		<h3 class="align-center">
			Testimoniales
		</h3>

		<article class="col-lg-4">
			<img class="img-circle" src="img/testimonial-1.png" alt="Testimonial" style="width: 140px; height: 140px;">
			<h2>Anna Sánchez</h2>
			<p>“Me cambio la vida el utilizar TEMOA para gestionar mis cursos, me ayudo a subir de puestos en mi área rápidamente”</p>
		</article>

		<article class="col-lg-4">
			<img class="img-circle" src="img/testimonial-2.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
			<h2>Federico Duran </h2>
			<p>“Me preocupaba quedarme en el mismo lugar en mi dependencia gubernamental, tenía ganas de salir adelante”</p>
		</article>

		<article class="col-lg-4">
			<img class="img-circle" src="img/testimonial-3.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
			<h2>Rodrigo Flores</h2>
			<p>“Tenía ganas de aprender pero no contaba con el tiempo, Cuando me enteré de TEMOA, todo cambio”</p>
		</article><!-- /.col-lg-4 -->

	</div>
	<!-- Testimonios -->

	<hr>

	<!-- Cursos Recientes / Creación de Cuenta -->

	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="tabbable" id="tabs-66117">

				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#cursos-recientes" data-toggle="tab">Cursos Recientes</a>
					</li>
					<li>
						<a href="#crear-cuenta" data-toggle="tab">Crea tu cuenta</a>
					</li>
				</ul>

				<div class="tab-content">

					<!-- TAB1 -->
					<div class="tab-pane active" id="cursos-recientes">

						<div class="row clearfix">

							<article class="col-md-3 column">
								<img alt="263x187" src="img/cursos-1.jpg">
								<div class="titulo-curso"><h4>Efectos en Photoshop</h4></div>
							</article>

							<article class="col-md-3 column">
								<img alt="263x187" src="img/cursos-2.jpg">
								<div class="titulo-curso"><h4>Responsive Web Design</h4></div>
							</article>

							<article class="col-md-3 column">
								<img alt="263x187" src="img/cursos-3.jpg">
								<div class="titulo-curso"><h4>Taller de AfterEffects</h4></div>
							</article>

							<article class="col-md-3 column">
								<img alt="263x187" src="img/cursos-4.jpg">
								<div class="titulo-curso"><h4>Del papel al monitor, diseño </h4></div>
							</article>

						</div>

						<div class="row clearfix">

							<article class="col-md-3 column">
								<img alt="263x187" src="img/cursos-5.jpg">
								<div class="titulo-curso"><h4>Curso de CSS y HTML básico</h4></div>
							</article>

							<article class="col-md-3 column">
								<img alt="263x187" src="img/cursos-6.jpg">
								<div class="titulo-curso"><h4>Laboratorio de Xcode</h4></div>
							</article>

							<article class="col-md-3 column">
								<img alt="263x187" src="img/cursos-7.jpg">
								<div class="titulo-curso"><h4>Diseño web sobre Wordpress</h4></div>
							</article>

							<article class="col-md-3 column">
								<img alt="263x187" src="img/cursos-8.jpg">
								<div class="titulo-curso"><h4>Diplomado de HTML 5</h4></div>
							</article>
						</div>

					</div>
					<!-- TAB1 -->

					<!-- TAB2 -->
					<div class="tab-pane" id="crear-cuenta">

						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
								
								<!-- Forma Subscripción -->
								<form role="form">

									<hr class="colorgraph">

									<div class="row">

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Nombre" tabindex="1">
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Apellido" tabindex="2">
											</div>
										</div>

									</div>

									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electrónico" tabindex="4">
									</div>

									<div class="row">

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirmar Password" tabindex="6">
											</div>
										</div>

									</div>

									<div class="row">

										<div class="col-xs-12 col-sm-12 col-md-12">
											<div class="form-group">

												<label for="status" class="col-sm-5 control-label">Dependencia de Gobierno</label>
												<div class="col-sm-7">
													<select class="form-control" id="status" name="status">
														<option>Presidencia</option>
														<option>Secretaría de Gobernación</option>
													</select>
												</div>

											</div> 
										</div> 

										<div class="col-xs-12 col-sm-12 col-md-12">
											<div class="form-group">

												<label for="status" class="col-sm-5 control-label">Área o Departamento</label>
												<div class="col-sm-7">
													<select class="form-control" id="status" name="status">
														<option>Sistemas</option>
														<option>Recursos Humanos</option>
													</select>
												</div>

											</div> 
										</div> 

										<div class="col-xs-12 col-sm-12 col-md-12">
											<div class="form-group">

												<label for="status" class="col-sm-5 control-label">Puesto actual</label>
												<div class="col-sm-7">
													<select class="form-control" id="status" name="status">
														<option>Director</option>
														<option>Subdirector</option>
													</select>
												</div>

											</div> 
										</div> 

										<div class="col-xs-12 col-sm-12 col-md-12">
											<div class="form-group">

												<label for="status" class="col-sm-5 control-label">Grado máximo de estudios</label>
												<div class="col-sm-7">
													<select class="form-control" id="status" name="status">
														<option>Media superior</option>
														<option>Licenciatura</option>
														<option>Maestría o superior</option>
														<option>Otro</option>
													</select>
												</div>

											</div> 
										</div> 
										<!-- CAPTCHA -->

									</div>

									<hr class="colorgraph">

									<div class="row">

										<div class="col-xs-11 col-sm-12 col-md-12">
											Al dar click en <strong class="label label-primary">Registrarme</strong> aceptas los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Términos y condiciones</a>.
										</div>
										<button type="submit" value="Registrarme" class="btn btn-primary pull-right" tabindex="7">Registrarme</button>

									</div>
								</form>
								<!-- Forma Subscripción -->

							</div>
						</div>

						<!-- Modal -->
						<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">

									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
									</div>

									<div class="modal-body">
										<!--TERMINOS Y CONDICIONES-->
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
									</div>

								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

					</div>
					<!-- TAB2 -->

				</div>
			</div>
		</div>
	</div>

	<!-- Cursos Recientes / Creación de Cuenta -->

	<hr>

	<div class="row clearfix">
		<div class="col-md-12 column">

			<div id="clients">

				<h3 class="align-center">Socios de capacitación</h3>
				<div class="clients-wrap">

					<ul id="clients-list" class="clearfix">
						<li><img src="img/adm.png" alt="ADM"></li>
						<li><img src="img/adobe.png" alt="Adobe"></li>
						<li><img src="img/aulavirtual.png" alt="Aula Virtual"></li>
						<li><img src="img/edumac.png" alt="Edumac"></li>
						<li><img src="img/kmmx.png" alt="KMMX"></li>
						<li><img src="img/adm.png" alt="ADM"></li>
						<li><img src="img/adobe.png" alt="Adobe"></li>
						<li><img src="img/aulavirtual.png" alt="Aula Virtual"></li>
						<li><img src="img/edumac.png" alt="Edumac"></li>
						<li><img src="img/kmmx.png" alt="KMMX"></li>
					</ul>
					
				</div>
			</div>

		</div>
	</div>


	<div class="row clearfix" id="stats-video"><!-- 1 -->
		<div class="col-md-12 column"><!-- 2 -->
			<div class="row clearfix"><!-- 3 -->

				<div class="col-md-6 column">

					<h3 class="align-center">Estadísticas de Uso</h3>

					<div class="chart"></div>

					<!--<script src="http://d3js.org/d3.v3.min.js"></script>-->
					<!--<script>

						var data = [4, 8, 15, 16, 23, 42];

						var x = d3.scale.linear()
						.domain([0, d3.max(data)])
						.range([0, 420]);

						d3.select(".chart")
						.selectAll("div")
						.data(data)
						.enter().append("div")
						.style("width", function(d) { return x(d) + "px"; })
						.text(function(d) { return d; });

					</script>-->

				</div>

				<div class="col-md-6 column">

					<h3 class="align-center">Conoce TEMOA</h3>
					<img src="img/video.jpg" alt="">

				</div>

			</div><!-- 3 -->
		</div><!-- 2 -->
	</div> <!-- 1 -->

</div>
<!-- Marketing -->

</div> <!-- Wrapper -->

<!-- Templates -->
<template id="searchTemplate">

	<section id="resultados-busqueda">
		<div class="container">

			<div class="row">

				<div class="col-md-6">
					<h4>Resultados de tu búsqueda: <span id="resultado-busqueda">Administrador de servidores</span></h4>
				</div>

				<div class="col-md-6">
					<form id="search-form" class="search-form" action="" id="buscador-interno">
						<p class="wrapper">
							<input class="icon" type="text" placeholder="Buscar de nuevo..." name="search" class="search-text"/>
						</p>
					</form>
				</div>

			</div>

			<div class="row clearfix">

				<div class="col-md-3 column">
					<div id="filtro-cursos">

						<p id="num-res-cursos">5 cursos encontrados</p>
						<h4>Organizar</h4>

						<div id="filtro-fecha">
							<h4>Por fecha de inicio</h4>
							<ul>
								<li>Comenzando hoy</li>
								<li>Próxima semana</li>
								<li>Próximo mes</li>
								<li>Recién comenzado</li>
								<li>Ritmo propio</li>
							</ul>
						</div>

						<div id="filtro-modalidad">
							<h4>Por modalidad</h4>
							<ul>
								<li>Presencial</li>
								<li>En línea</li>
							</ul>
						</div>

					</div>
				</div>

				<div class="col-md-9 column">

					<table class="table table-striped table-bordered">

						<thead>
							<tr>
								<th>Nombre del curso</th>
								<th>Área</th>
								<th>Fecha de inicio</th>
								<th>Agregar</th>
							</tr>
						</thead>

						<tbody id="courses">

						</tbody>

					</table>

					<div class="row" id="cargarMas"">
					</div>

					<button id="ver-perfil" class="btn btn-default" type="button"><em class="glyphicon glyphicon-eye-open"></em> Sugerir Curso</button>

					<div class="btn-group btn-group-md pull-right">
						<button id="agregar-favoritos" class="btn btn-default" type="button" data-toggle="modal" data-target="#temario"><em class="glyphicon glyphicon-filter"></em> Limpiar filtros</button>
						<button id="agregar-favoritos" class="btn btn-default pull-right" type="button" data-toggle="modal" data-target="#temario"><em class="glyphicon glyphicon-chevron-right"></em> Ver cursos agregados</button>
					</div>

					

				</div>

			</div>

			<div class="row">

				<div class="col-md-3 column">
				</div>

				<div class="col-md-9 column">
					<div id="detalle-busqueda">

					</div>
				</div>

			</div>
		
		</div>
	</section>

</template>

<template id="courseTemplate">
	<tr>
		<td><span id="titulo-curso">@{{nombre}}</span> <br><span id="nombre-socio">@{{socioTecnologico.nombre}}</span></td>
		<td>@{{categoria}}</td>
		<td>22 de enero, 2015</td>
		<td>
			<button id="agregar-favoritos" class="btn btn-default btn-sm fav-button" type="button" data-toggle="modal" data-target="#temario" data-id="@{{id}}"><em class="glyphicon glyphicon-star"></em> Agregar</button>
		</td>
	</tr>
</template>
@stop

@section('scripts-bottom')
	<script src="/js/carousels.js"></script>
	<script src="/js/mustache.min.js"></script>
	<script src="/js/store.min.js"></script>
	<script src="/js/search.js"></script>
	<script src="/js/happy.js"></script>
@stop