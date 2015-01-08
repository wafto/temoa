@extends('front.base')

@section('extra-css')
<link rel="stylesheet" href="/css/custom2.css">
@stop

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
    
    <div id="courses">

    </div>


    <div class="row clearfix">
        <div class="col-md-12 column carga-mas">
            <button id="moare" class="btn">Cargar más!</button>
        </div>
    </div> 

  </div>
         

</section>
</div>

<template id="courseTemplate">
    <div class="col-md-2 column">
        <article>
            <img src="@{{imagen}}" alt="">
            <h4>@{{nombre}}</h4>
            <p>@{{descripcion}}</p>
            <a class="btn btn-default" href="#">Ver curso</a>
        </article>
    </div>
</template>

@stop

@section('scripts-bottom')

<script src="/js/mustache.min.js"></script>

<script>

(function(){

    var url            = 'api/v1/cursos?sort=created_at&direction=desc&size=6',
        courseTemplate = $('#courseTemplate').html(),
        currentPage,
        totalPages;

        $.ajax({

            url    : url,
            method : 'get'

        }).done(function(data){

            var results = data.items;
            totalPages  = Math.ceil(data.total / 6);
            currentPage = data.page;

            
            $.each(results, function(i, course){
                
                course.descripcion = course.descripcion.substr(0,128) + " ...";

                $('#courses').append(Mustache.render(courseTemplate, course));


            });

        })


        $('#moare').on('click', function(){

            if(currentPage != totalPages){

                $.ajax({

                    url    : url + "&page=" + (currentPage + 1),
                    method : 'get'

                }).done(function(data){

                    currentPage += 1;

                    var results = data.items;

                    $.each(results, function(i, course){
                
                    course.descripcion = course.descripcion.substr(0,128) + " ...";

                    $('#courses').append(Mustache.render(courseTemplate, course));


            });

                });
                

                     
            } else{
                $('#moare').remove();
            }

        });


})();

</script>
@stop
