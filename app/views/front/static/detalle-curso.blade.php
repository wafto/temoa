@extends('front.base')

@section('content')

<div class="container">
<section id="oferta-contenido">
  <div class="row clearfix">
    <div class="col-md-12 column">
    <div class="row">

<!-- course -->
<div id="course" class="col-md-8 column" style="min-height:600px;">

</div>
<!-- course -->

<!-- Modal -->
<div class="modal fade" id="temario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title" id="modalTitle"></h4>
      </div>
      <div id="stemario" class="modal-body">
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<div class="col-md-4 column">
  <article id="imagen-destacada">
    <img id="imagen" alt="" src="">
  </article>
</div>

  </div>
  </div>
</div>



</section>
</div>

<!-- Templates -->

<template id="courseTemplate">

<h3 id="titulo-curso">@{{nombre}}</h3>
  <h4 id="nombre-socio">Impartido por: <strong>@{{socioTecnologico.nombre}}</strong></h4>
  <h4 id="modalidad-curso">Modalidad: <strong>@{{formato}}</strong></h4>
  <h4 id="fecha-inicio">Fecha de inicio: <strong>@{{inicio}}</strong></h4>

  <div class="row">
    <div class="col-md-12 column">

    <section id="ficha-tecnica">
      <p id="descripcion-curso">
        @{{descripcion}}
      </p>
    </section>

    <div class="btn-group btn-group-md">
      <button id="ver-temario" class="btn btn-default" type="button" data-toggle="modal" data-target="#temario"><i class="fa fa-info-circle"></i> Leer Temario</button>
      <button id="ver-perfil" class="btn btn-default" type="button"><i class="fa fa-eye"></i> Ver Perfil de Socio</button>
      <button data-id="@{{id}}" id="solicitar-inscripcion" class="btn-id btn btn-default" type="button"><i class="fa fa-check-square"></i> Solicitar INSCRIPCIÓN</button>
    </div>

    </div>
  </div>

</template>

<!-- /Templates -->

@stop

@section('scripts-bottom')

<script src="/js/store.min.js"></script>
<script src="/js/mustache.min.js"></script>

<script>

$(document).ready(function(){

    var urlSplit = document.URL.split('/'),
        courseId = urlSplit[urlSplit.length - 1],
        couseTemplate = $('#courseTemplate').html(),
        user = store.get('user');

    $.ajax({
        url : '/api/v1/cursos?search[id][eq]=' + courseId,
        method : 'get'
    }).done(function(data){

      var course = data.items[0]

      $('#course').append(Mustache.render(couseTemplate, course));
      $('#imagen').attr('src', course.imagen);
      $('#modalTitle').html(course.nombre);
      $('#stemario').html(course.temario);

      if(user.capacitaciones.indexOf(parseInt(course.id)) != -1){

        $('#solicitar-inscripcion').remove();

      }

    });

    $('body').on('click', '.btn-id', function(){

      $this = $(this);

      user.capacitaciones.push(parseInt($this.data('id')));

      store.set('user', user);

      $this.fadeOut();

      window.location = '/continuar';

    });



});

</script>

@stop


@section('extra-css')

<style>
  .filter{
    background: red;
  }
</style>
@stop
