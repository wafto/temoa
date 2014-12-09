<header class="navbar navbar-default navbar-fixed-top" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Temoa</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="dropdown" @if (Request::is('admin/usuarios*')) class="active" @endif>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Usuarios <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ action('Admin\User\CivilServantsController@index') }}">Servidores Públicos</a></li>
            <li><a href="{{ action('Admin\User\PartnersController@index') }}">Socios Tecnológicos</a></li>
            <li><a href="{{ action('Admin\User\DependenciesAdminsController@index') }}">Admins de Dependencias</a></li>
            <li><a href="{{ action('Admin\User\AdminsController@index') }}">Admins de temoa</a></li>
          </ul>
        </li>
        <li @if (Request::is('admin/dependencias*')) class="active" @endif>
          <a href="{{ action('Admin\DependenciesController@index') }}">Dependencias</a>
        </li>
        <li @if (Request::is('admin/cursos*')) class="active" @endif>
          <a href="{{ action('Admin\CoursesController@index') }}">Cursos</a>
        </li>
        <li @if (Request::is('admin/contactos*')) class="active" @endif>
          <a href="{{ action('Admin\ContactsController@index') }}">Contacto</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{ Auth::user()->email }} <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#"><span class="glyphicon glyphicon-user"></span> Perfil</a>
            </li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>
