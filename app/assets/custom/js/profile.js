(function(){

	var user = store.get('user'),
		userProfileTemplate = $('#userProfileTemplate').html(),
		favoritosTemplate = $('#favoritosTemplate').html(),
		capacitacionTemplate = $('#capacitacionTemplate').html(),
		favArray = user.favoritos;
		capArray = user.capacitaciones;
		idSearch = "&search[id][in]="


	$('#profileContainer').html(Mustache.render(userProfileTemplate, user));


	if(favArray.length >= 1){

		var favSearch = idSearch;

		for(var i = 0; i < favArray.length; i++ ){

			favSearch += favArray[i]; 

			if (i < favArray.length - 1){

				favSearch += ','

			}

		}

	} else{

		var favSearch = '';

	}

	if(capArray.length >= 1){

		var capSearch = idSearch;

		for(var i = 0; i < capArray.length; i++ ){

			capSearch += capArray[i]; 

			if (i < capArray.length - 1){

				capSearch += ','

			}

		}

	} else{

		var capSearch = '';

	}


	if(favSearch != ''){

		$.ajax({
			url : "/api/v1/cursos?" + favSearch,
			method : 'get'
		}).done(function(data){

			results = data.items;

			$.each(results, function(i, course){

				$('#favTable').append(Mustache.render(favoritosTemplate, course));

			});
			
		});

	}

	if (capSearch != '') {

		$.ajax({
			url : "/api/v1/cursos?" + capSearch,
			method : 'get'
		}).done(function(data){

			results = data.items;

			$.each(results, function(i, course){

				$('#capTable').append(Mustache.render(capacitacionTemplate, course));

				var $button = $('button[data-id=' + course.id + ']');


				if(user.capacitaciones.indexOf(parseInt(course.id)) != -1){
					$button.remove();
				}


			});
			
		});

	}

	$('body').on('click', '.cap-button', function(){

		$this = $(this);

		user.capacitaciones.push(parseInt($this.data('id')));

		store.set('user', user);

		$this.fadeOut();

		window.location = '/continuar';

	});
	
})();