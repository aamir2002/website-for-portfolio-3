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

          <li class="nav-item">     
            <a class="nav-link" href=""><span>
            <i class="bi bi-person-square" style="font-style: normal;">
            <?php echo $_SESSION['username']; ?></i></span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . 'logout.php'; ?>">Выход</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>