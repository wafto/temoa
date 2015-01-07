@extends('front.base')

@section('content')

<div class="container">

<section id="oferta-nav">
  <div class="row clearfix">
    <div class="col-md-4 column">
      <h3>Oferta Académica</h3>
    </div>
    <div class="col-md-4 column">
      <div class="btn-group btn-group-md">
         <button class="btn btn-default" type="button"><i class="fa fa-check"></i> Nuevos</button>
         <button class="btn btn-default" type="button"><i class="fa fa-list-ul"></i> Categoría</button>
         <button class="btn btn-default" type="button"><i class="fa fa-thumbs-o-up"></i> Destacados</button>
      </div>
    </div>

    <div class="col-md-4 column">
    </div>

  </div>
</section>

<section id="oferta-contenido">
  <div class="row clearfix">

    <div class="col-md-2 column">
      <article>
        <img src="img/xcode.jpg" alt="">
        <h4>Laboratorio Experimental Xcode</h4>
        <p>El Laboratorio Experimental Xcode es una iniciativa con la que podrás aprender a crear aplicaciones para Apple iOS, con una fórmula que garantiza el mayor éxito.</p>
        <button class="btn">Ver curso</button>
      </article>
    </div>

    <div class="col-md-2 column">
       <article>
        <img src="img/seo.jpg" alt="">
        <h4>Congreso SEO Online 2014</h4>
        <p>Todo listo para arrancar el Congreso Online SEO 2014 una nueva edición del evento online dedicado a SEO más importante que existe en la actualidad.</p>
        <button class="btn">Ver curso</button>
      </article>
    </div>

    <div class="col-md-2 column">
       <article>
        <img src="img/laravel.jpg" alt="">
        <h4>Desarrollo de aplicaciones con Laravel</h4>
        <p>Laravel es un Framework de Desarrollo web MVC para PHP con el que optimizar tiempos, costos y esfuerzos para llevar a cabo cualquier proyecto.también editores online.</p>
        <button class="btn">Ver curso</button>
      </article>
    </div>

    <div class="col-md-2 column">
       <article>
        <img src="img/codigo.jpg" alt="">
        <h4>Edición de código y buenas prácticas</h4>
        <p>Una de las herramientas que debes usar diariamente en la maquetación y programación web es el editor. Actualmente hay infinidad de editores de código, específicos para el sistema operativo, multiplataforma y desde hace un tiempo.</p>
        <button class="btn">Ver curso</button>
      </article>
    </div>

    <div class="col-md-2 column">
       <article>
        <img src="img/git.jpg" alt="">
        <h4>Curso de GIT</h4>
        <p>Este es un curso de Git, una herramienta esencial para los desarrolladores que quieran formar parte de equipos serios de desarrollo o que quieran aprender a gestionar proyectos de manera profesional.</p>
        <button class="btn">Ver curso</button>
      </article>
    </div>

        <div class="col-md-2 column">
       <article>
        <img src="img/ui.jpg" alt="">
        <h4>Sin UI no hay paraiso</h4>
        <p>Repasaremos la metodología Atomic Design para la creación de sistemas de diseño y llevaremos a cabo una miniguía de creación de guías de estilo donde recoger los patrones básicos relacionados con el aspecto de una interfaz.</p>
        <button class="btn">Ver curso</button>
      </article>
    </div>

      <div class="row clearfix">
    <div class="col-md-12 column carga-mas">
              <button class="btn">Cargar más!</button>
    </div>
    </div> 

  </div>
         

</section>
</div>

@stop

@section('scripts-bottom')
<script scr="mames.js"></script>
@stop
