(function($){

	var $search        = $('#search-form'),
		user           = store.get('user'),
		baseURL        = "/api/v1/cursos?",
		courseTemplate = $('#courseTemplate').html(),
		searchTemplate = $('#searchTemplate').html(),
		lastURL,
		currentPage,
		totalPages;

	$('body').on('submit', '#search-form', function(evt){

		var searchTerm = $(this).find("input").val(),
			url        = baseURL + "search[name][lk]=" + searchTerm;
		
		$.ajax({

			url    : url,
			method : 'get'

		}).done(function(data){

			var searchResults  = data.items;


			// Se ejecuta solo si es la primer búsqueda
			if( typeof totalPages == 'undefined'){

                $('#wrapper').html(Mustache.render(searchTemplate, { busqueda : searchTerm }))

			    // $('#wrapper').html(searchTemplate);
                // Mustache.render(courseTemplate, course)

			} else{

				$('#courses').html('');
				$('#cargarMas').html('');

			}

			var $courses = $('#courses');

			$.each(searchResults, function(i, course){

				$courses.append(Mustache.render(courseTemplate, course));

				var $button = $('button[data-id=' + course.id + ']');

				if(user.favoritos.indexOf(parseInt(course.id)) != -1){
					$button.remove();
				}

				if(user.capacitaciones.indexOf(parseInt(course.id)) != -1){
					$button.remove();
				}


			});


			totalPages         = Math.ceil(data.total / 24);
			currentPage        = data.page;
			lastURL            = url;

			if(totalPages > 1){

				$('#cargarMas').append('<button class="btn btn-default" id="cargar"><i class="fa fa-plus"></i> Cargar Más</button>')

			}

		});

		evt.preventDefault();

	});

	$('#wrapper').on('click', '#cargar', function(){

		if(currentPage < totalPages){

			$.ajax({

				url    : lastURL + '&page=' + (currentPage + 1),
				method : 'get'

			}).done(function(data){

				currentPage += 1;

				var searchResults = data.items;

				$.each(searchResults, function(i, course){

					$('#courses').append(Mustache.render(courseTemplate, course));

					var $button = $('button[data-id=' + course.id + ']');

					if(user.favoritos.indexOf(parseInt(course.id)) != -1){
						$button.remove();
					}

					if(user.capacitaciones.indexOf(parseInt(course.id)) != -1){
						$button.remove();
					}


				});

				if(totalPages <= currentPage){
					$('#cargarMas').html('');
				}

			});
			
		}



	});

	$("body").on('click', '.fav-button', function(){

		$this = $(this);

		user.favoritos.push(parseInt($this.data('id')));

		store.set('user', user);

		$this.fadeOut();

	});

	$("body").on('click', '#verPerfil', function(){
		window.location = '/profile';
	});

	$("body").on('click', '.filter', function(){
		$(this).toggleClass('selected');
	});

	$("body").on('click', '#filtrar', function(){


		var query            = lastURL,
			$categoryFilters = $('.selected.filter.category'),
			$formatFilters   = $('.selected.filter.format');


		if($categoryFilters.length > 0){
			
			query += '&search[category_id][in]='

			$categoryFilters.each(function(){

				id = $(this).data('id');

				query += id + ',';


			});

		}

		if($formatFilters.length > 0){

			$formatFilters.each(function(){

				query += '&search[format][eq]=' + $(this).data('id');

			});


		}


		$.ajax({
			url : query,
			method : 'get'
		}).done(function(data){


			var results = data.items,
				$courses = $('#courses');

			$courses.html('');


			$.each(results, function(i, course){

				$courses.append(Mustache.render(courseTemplate, course));


			});




		});

		return false;





	});

})(jQuery);
