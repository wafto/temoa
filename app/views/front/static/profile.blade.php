@extends('front.base')

@section('content')
<div class="container" style="margin-top:120px; min-height:700px">


<div class="row clearfix">
    <div class="col-md-12 column">
      <div class="tabbable" id="tabs-115833">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#mi-perfil" data-toggle="tab">Mi Perfil</a>
          </li>
          <li>
            <a href="#mis-capacitaciones" data-toggle="tab">Mis Capacitaciones</a>
          </li>
           <li>
            <a href="#favoritos" data-toggle="tab">Favoritos</a>
          </li>
       <!--      <li>
            <a href="#preferencias" data-toggle="tab">Preferencias</a>
          </li> -->
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="mi-perfil">



  <div class="row clearfix">
    <div class="col-md-12 column">
<div class="row">


    <div class="col-md-9 column" id="profileContainer">
      
    </div>



    <div class="col-md-3 column sidebar">
      <div class="row clearfix">
        <div class="col-md-12 column">
          <article id="notificaciones">
            <h4 style="align:right;">NOTIFICACIONES</h4>
            <ul>
              <li>Tu curso de HTML5 casi termina.</li>
              <li>Completa tu perfil</li>
            </ul>
          </article>
          <article id="actualizaciones">
            <h4 style="align:right;">ACTUALIZACIONES</h4>
            <ul>
              <li>Ver destacados</li>
              <li>Nuevos videos</li>
              <li>Hay una nueva fecha para curso HTML5</li>
            </ul>
          </article>

        </div>
      </div>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-9 column">
      <div class="row clearfix">
        <div class="col-md-12 column">
          <h3>Sobre Mi</h3>
          <article id="sobre-mi">
            <p>Soy un Ingeniero en Sistemas altamente responsable, creativo, con iniciativa y puntualidad, asumo con responsabilidad los retos y metas que la organización me plantee; adaptabilidad al cambio, manejo de personal, facilidad para trabajar en equipo, en condiciones de alta presión, así como para resolver problemas eficientemente y lograr las metas de productividad trazadas por la empresa y mi grupo de trabajo.</p>
          </article>
        </div>
 <!--        <div class="col-md-6 column">
          <h3>Áreas de Interés</h3>
          <article id="areas-interes">
                <div id="intereses-cloud" style="width: 100%; height:200px;"></div>
          </article>
        </div> -->
      </div>
    </div>




  </div>
  <div class="row clearfix">
      <div class="col-md-12 column">
        <h3>Recomendaciones</h3>
        <section id="mis-cursos">
  <div class="row clearfix">
    <div class="col-md-3 column">
      <article>
         <a href=""><img src="img/xcode.jpg" alt="">
       <h4>Laboratorio Experimental Xcode</h4></a>
      </article>
    </div>
    <div class="col-md-3 column">
       <article>
        <a href=""><img src="img/seo.jpg" alt="">
        <h4>Congreso SEO Online 2014 Avanzados</h4></a>
      </article>
    </div>
    <div class="col-md-3 column">
       <article>
        <a href=""><img src="img/laravel.jpg" alt="">
        <h4>Desarrollo de aplicaciones con Laravel</h4></a>
      </article>
    </div>
    <div class="col-md-3 column">
       <article>
        <a href=""><img src="img/codigo.jpg" alt="">
        <h4>Edición de código y buenas prácticas</h4></a>
      </article>
    </div>
 
  </div>
         

</section>

    </div>

  </div>


    
          </div>

       
  </div>
          </div>
          <div class="tab-pane" id="mis-capacitaciones">

          	<table class="table table-striped table-bordered">
				<tbody id="capTable"></tbody>
			</table>
<!--seccion 2 -->
          </div>

		<div class="tab-pane" id="favoritos">
			<table class="table table-striped table-bordered">
				<tbody id="favTable"></tbody>
			</table>
		</div>

                    <div class="tab-pane" id="preferencias">
<!--seccion 2 -->
          </div>
        </div>
      </div>
    </div>
  </div>


</div>



<!-- Templates -->

<template id="userProfileTemplate">
<div class="row clearfix">
        <div class="col-md-4 column">
          <img src="img/manuel-cruz.jpg" alt="" width="245">
        </div>
        <div class="col-md-8 column">
      <div class="row">
        <div class="col-md-12">
          <h4><i class="fa fa-user"></i> @{{nombre}}</h4>
        </div>
      </div>

      	<!-- Perfil de Usuario -->
        <div class="row">
          <div class="col-md-6">
          <p><i class="fa fa-suitcase"></i> @{{puesto}}</p>
          <p><i class="fa fa-mortar-board"></i> @{{estudios}}</p>
          <p><i class="fa fa-flask"></i> @{{especialidad}}</p>
        </div>
          <div class="col-md-6">
          <p><i class="fa fa-building"></i> @{{dependencia}}</p>
          <p><i class="fa fa-sitemap"></i> Departamento de Sistemas</p>
          <p><i class="fa fa-globe"></i> Ciudad de México</p>
          </div>
        </div>
        <!-- Perfil de Usuario -->

        </div>
        <div class="col-md-4 column">
          
        </div>
      </div>
</template>


<template id="favoritosTemplate">
	<tr>
		<td><span id="titulo-curso">@{{nombre}}</span> <br><span id="nombre-socio">@{{socioTecnologico.nombre}}</span></td>
		<td>@{{categoria}}</td>
		<td>22 de enero, 2015</td>
		<td>
			<button id="agregar-favoritos" class="btn btn-default btn-sm cap-button" type="button" data-toggle="modal" data-target="#temario" data-id="@{{id}}"><i class="fa fa-eye"></i> Ver curso</button>
		</td>
	</tr>
</template>

<template id="capacitacionTemplate">
	<tr>
		<td><span id="titulo-curso">@{{nombre}}</span> <br><span id="nombre-socio">@{{socioTecnologico.nombre}}</span></td>
		<td>@{{categoria}}</td>
		<td>22 de enero, 2015</td>
		<td>
			<p>Solicitud pendiente</p>
		</td>
	</tr>
</template>
@stop

@section('scripts-bottom')
	<script src="/js/mustache.min.js"></script>
  <script src="/js/profile.js"></script>
@stop

@section('scripts-top')
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="/js/store.min.js"></script>
  <script src="/js/happy.js"></script>
    <script src="/js/custom.js"></script>
@stop
