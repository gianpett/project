<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbar_main">

      <!-- Navbar: Brand -->
      <a class="navbar-brand" href="#">
      <?= $title ?>
      </a>

      <!-- Navbar: Toggle menu -->
      <a href="#" class="navbar-btn navbar-left" id="sidebar__toggle">
        <i class="fa fa-bars"></i>
      </a>

      <!-- Navbar: Search form -->
      <form class="navbar-form navbar-left hidden-xs" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Pesquisar">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-link">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- Navbar: Sign out -->
      <a href="logout.php" class="navbar-btn navbar-right btn btn-accent">
        <i class="fa fa-power-off"></i> Sair
      </a>
      <!-- Navbar: Links -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="navbar-notification"></span>
            <span class="hidden-xs">Avisos</span><i class="fa fa-envelope visible-xs-inline-block"></i>
          </a>
          <div class="dropdown-menu navbar-messages">
            <a href="#" class="navbar-messages__item">
              <div class="navbar-messages__avatar">
                <img src="assets/img/user_2.jpg" alt="...">
              </div>
              <div class="navbar-messages__body">
                <h5 class="navbar-messages__sender">
                  Jane Roe
                </h5>
                <p class="navbar-messages__content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                </p>
              </div>
            </a>
            <a href="#" class="navbar-messages__item">
              <div class="navbar-messages__avatar">
                <img src="assets/img/user_3.jpg" alt="...">
              </div>
              <div class="navbar-messages__body">
                <h5 class="navbar-messages__sender">
                  John Doe
                </h5>
                <p class="navbar-messages__content">
                  Reprehenderit consequatur minima non nostrum aliquid, excepturi...
                </p>
              </div>
            </a>
            <a href="#" class="navbar-messages__item">
              <div class="navbar-messages__avatar">
                <img src="assets/img/user_4.jpg" alt="...">
              </div>
              <div class="navbar-messages__body">
                <h5 class="navbar-messages__sender">
                 Mary Major
                </h5>
                <p class="navbar-messages__content">
                  Ipsa quaerat labore blanditiis consequuntur, rerum minima, aut...
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="navbar-notification hidden"></span>
            <span class="hidden-xs">Atualizações</span> <i class="fa fa-bell visible-xs-inline-block"></i>
          </a>
          <div class="dropdown-menu navbar-alerts">
            <a href="#" class="navbar-alerts__item">
              <span class="label label-success">
                <i class="fa fa-user"></i>
              </span>
              Novo usuário registrado
            </a>
            <a href="#" class="navbar-alerts__item">
              <span class="label label-danger">
                <i class="fa fa-bolt"></i>
              </span>
              Servidor atualizado
            </a>
            <a href="#" class="navbar-alerts__item">
              <span class="label label-warning">
                <i class="fa fa-bell"></i>
              </span>
              Servidor não responde
            </a>
            <a href="#" class="navbar-alerts__item">
              <span class="label label-success">
                <i class="fa fa-user"></i>
              </span>
              Novo usuário registrado
            </a>
            <a href="#" class="navbar-alerts__item">
              <span class="label label-danger">
                <i class="fa fa-bolt"></i>
              </span>
              Erro na database
            </a>
          </div>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
