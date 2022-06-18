<header class="fixed-top">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <a href="<?php echo BASE_URL ?>" class="navbar-logo">Brand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="work.php">Работы</a></li>
          <li class="nav-item"><a class="nav-link" href="news.php"><span>Новости</span></a></li>
          <li class="nav-item">
            <?php if (isset($_SESSION['id'])): ?>
            <a class="nav-link" href=""><span>
                <i class="bi bi-person-square" style="font-style: normal;">
                  <?php echo $_SESSION['username'];?></i></span></a>
            <ul class="submenu">
              <?php if ($_SESSION['admin']): ?>
                <li><a href="admin/posts/index.php">Админ панель</a></li>
              <?php endif;?>
              <li><a href="<?php echo BASE_URL . 'logout.php';?>">Выход</a></li>
            </ul>
            <?php else: ?>
            <a class="nav-link" href="<?php echo BASE_URL . 'log.php';?>"><span>
                <i class="bi bi-person-square" style="font-style: normal;">
                  Вход</i></span>
            </a>
            <ul class="submenu">
              <li><a href="<?php echo BASE_URL . 'reg.php';?>">Регистрация</a></li>
            </ul>
            <?php endif; ?>
          </li>
          <li class="nav-item"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#writeUs">Написать
              нам</button></li>
        </ul>
      </div>
    </div>
  </nav>
</header>