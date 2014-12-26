(function(){

	var user  = store.get('user');

	if(typeof user == 'undefined'){

		user = {
			username       : 'usuario',
			password       : 'secret',
			logedin        : false,
			nombre         : 'Ernesto Jiménez Villaseñor',
			puesto         : 'Gerente TI',
			estudios       : 'Ing. Sistemas',
			especialidad   : 'Bases de Datos',
			dependencia    : 'Secretaría de Educación Pública',
			favoritos      : [],
			capacitaciones : []
		}

		store.set('user', user);

	}

	if(user.logedin == false){

		window.location = "/login"

	}

})();