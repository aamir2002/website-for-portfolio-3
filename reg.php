<?php
error_reporting(0);
include 'path.php';
include 'app/controllers/users.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include("blocks/head.php") ?>

<body>
  <div class="page">
    <?php include "blocks/header.php" ?>
    <main>
      <div class="container reg-form">
        <form class="row justify-content-center" method="POST" action="reg.php">
          <h3>Форма регистрации</h3>
          <div class="col-12 col-md-4 err">
            <p><?= $errMsg ?></p>
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Логин</label>
            <input name="username" value="<?= $username ?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input name="email" value="<?= $email ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4 d-flex justify-content-center flex-column">

            <button type="submit" class="btn btn-primary" name="button-reg">Зарегестрироваться</button>
            <div class="d-flex justify-content-center">
              <span class="mt-4">Уже есть аккаунт?<a href="log.php" class="link-reg">Войти</a></span>
            </div>
          </div>
        </form>
      </div>
    </main>

    <?php
    include('blocks/footer.php');
    include('blocks/modals.php');
    ?>

  </div>
</body>

</html>



<link rel="stylesheet" href="css/style.css">
<script src="js/main.js"></script>