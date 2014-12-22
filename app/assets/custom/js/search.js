(function(){

	var $search        = $('#search-form'),
		baseURL        = "/api/v1/cursos?",
		courseTemplate = $('#courseTemplate').html(),
		searchTemplate = $('#searchTemplate').html(),
		lastURL,
		currentPage,
		totalPages;

	$search.on('submit', function(evt){

		var searchTerm = $search.find("input").val(),
			url        = baseURL + "search[name][lk]=" + searchTerm;
		
		$.ajax({

			url    : url,
			method : 'get'

		}).done(function(data){

			var searchResults  = data.items;


			// Se ejecuta solo si es la primer búsqueda
			if( typeof totalPages == 'undefined'){

				$('#wrapper').html(searchTemplate);

			}

			var $courses = $('#courses');

			$.each(searchResults, function(i, course){

				$courses.append(Mustache.render(courseTemplate, course));

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

})();