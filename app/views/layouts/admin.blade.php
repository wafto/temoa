<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Temoa</title>

    @section('stylesheets')
    <!-- css -->
    {{ HTML::style("/css/bootstrap.min.css") }}
    {{ HTML::style("/css/bootstrap-datetimepicker.min.css") }}
    {{ HTML::style("/css/tagmanager.css") }}
    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    @yield('content')

    @section('javascripts')
    <!-- javascripts -->
    {{ HTML::script("/js/jquery.min.js") }}
    {{ HTML::script("/js/bootstrap.min.js") }}
    {{ HTML::script("/js/moment-with-locales.min.js") }}
    {{ HTML::script("/js/bootstrap-datetimepicker.min.js") }}
    {{ HTML::script("/js/tagmanager.js") }}
    @show

  </body>
</html>
