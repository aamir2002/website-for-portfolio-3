<?php
include 'path.php';
include 'app/controllers/users.php';
?>
<!DOCTYPE html>
<html lang="ru">
<?php include("blocks/head.php") ?>

<body>
  <div class="page">
    <?php include("blocks/header.php") ?>
    <main>
      <div class="container reg-form">
        <form class="row justify-content-center" method="POST" action="log.php">
          <h3>Авторизация</h3>
          <div class="col-12 col-md-4 err">
            <p><?= $errMsg ?></p>
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input name="email" value="<?= $email ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" name="password" value="" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4 d-flex justify-content-center flex-column">
            <button type="submit" name="button-log" class="btn btn-primary">Войти</button>
            <div class="d-flex justify-content-center">
              <span class="mt-4">Нету аккаунта?<a href="reg.php" class="link-reg">Регистрация</a></span>
            </div>
          </div>
        </form>
      </div>
    </main>
    <?php include('blocks/footer.php'); ?>
    <?php include('blocks/modals.php'); ?>
  </div>
</body>

</html>