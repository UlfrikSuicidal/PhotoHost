<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!--<img src="img/logo.svg">-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <?php
      if($_COOKIE['user'] == ''):
      ?>
      <li class="nav-item">
      <a class="nav-link" href="signIn.php">Вход</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="reg.php">Регистрация</a>
      </li>
    </ul>
      <?php else: ?>
      <li class="nav-item active">
        <a class="nav-link" href="upload.php">Добавить фото<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cabinet.php">Кабинет</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exit.php">Выход</a>
      </li>
      <?php endif;?>
      
    <form class="form-inline my-2 my-lg-0" action="search.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" >
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>