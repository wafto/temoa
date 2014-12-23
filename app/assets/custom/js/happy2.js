(function(){

	user = store.get('user');

	if(user.logedin == true){
		window.location = "/"
	}

	$('#formLogin').on('submit', function(evt){

		$this = $(this)

		var formUser     = $this.find('input#username').val(),
			formPassword = $this.find('input#password').val();

		if(formUser == user.username && formPassword == user.password){
			user.logedin = true;

			store.set('user', user);
			window.location = "/"
		}

		evt.preventDefault();

	});

})();