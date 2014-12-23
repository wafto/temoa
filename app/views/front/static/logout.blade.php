<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="/js/store.min.js"></script>
	<script>
		(function(){
			user = store.get('user');

			user.logedin = false;

			store.set('user', user);

			window.location = '/login';
		})();
	</script>
	
</body>
</html>