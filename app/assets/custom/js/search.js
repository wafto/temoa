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

				$('#wrapper').html(searchTemplate);

			} else{

				$('#courses').html('');
				$('#cargarMas').html('');

			}

			var $courses = $('#courses');

			$.each(searchResults, function(i, course){

				$courses.append(Mustache.render(courseTemplate, course));

				var $button = $('button[data-id=' + course.id + ']');


				if(user.favoritos.indexOf(course.id) != -1){
					$button.remove();
				}

			});


			totalPages         = Math.ceil(data.total / 24);
			currentPage        = data.page;
			lastURL            = url;

			if(totalPages > 1){

				$('#cargarMas').append('<button id="cargar">Cargar Más</button>')
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
				});

				if(totalPages <= currentPage){
					$('#cargarMas').html('');
				}

			});
			
		}



	});


})($);