<header class="navbar navbar-default navbar-fixed-top" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">wafto.mx</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#"><span class="glyphicon glyphicon-cog"></span> Admins</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {Auth user email} <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#"><span class="glyphicon glyphicon-user"></span> User Profile</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>
