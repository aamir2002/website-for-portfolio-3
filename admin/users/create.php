<?php
error_reporting(0);
session_start();
include '../../path.php';
include '../../app/controllers/users.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Site</title>

   <!-- Links -->
   <link rel="stylesheet" href="../../assets/css/style.css">
   <link rel="stylesheet" href="../../assets/css/style-admin.css">
   <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


   <!-- scripts -->
   <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
   <script src="../../assets/js/jquery-3.6.0.min.js"></script>
   <script src="../../assets/js/slick.min.js"></script>
   <script src="../../assets/js/slider.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
           integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
           crossorigin="anonymous"></script>
   <script src="../../assets/js/main.js"></script>
</head>

<body>
<div class="page">
    <?php include "../../blocks/header-admin.php" ?>

   <main>
      <div class="container">
         <div class="row">
             <?php include '../../blocks/sidebar-admin.php' ?>

            <div class="posts col-9">
               <div class="button row d-flex justify-content-end mb-5">
                  <a href="<?php echo BASE_URL . "admin/users/create.php";?>" class="col-2 btn btn-success me-3">Создать</a>
                  <a href="<?php echo BASE_URL . "admin/users/index.php";?>" class="col-2 btn btn-warning">Управление</a>
               </div>

               <div class="row">
                  <h4 class="mb-4 text-center">Создать пользователя</h4>
               </div>

               <div class="row add-post">
                  <form action="create.php" method="POST">


                     <div class="w-100"></div>
                     <div class="mb-3 col">
                        <label for="formGroupExampleInput" class="form-label">Логин</label>
                        <input name="username" value="<?= $username ?>" type="text" class="form-control"
                               id="formGroupExampleInput" placeholder="Username">
                     </div>
                     <div class="w-100"></div>
                     <div class="mb-3 col">
                        <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                        <input name="email" value="<?= $email ?>" type="email" class="form-control"
                               id="exampleInputEmail1" placeholder="E-mail">
                     </div>
                     <div class="w-100"></div>
                     <div class="mb-3 col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Password">
                     </div>
                     <div class="w-100"></div>
                     <div class="mb-3 col">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
                     </div>

                     <div class="w-100"></div>
                     <div class="mb-3 col">
                        <label for="selectRole" class="form-label">Выберитель роль</label>
                        <select class="form-select mb-4" id="selectRole" aria-label="Default select example">
                           <option selected>User</option>
                           <option value="1">Admin</option>
                        </select>
                     </div>

                     <div class="col">
                        <button class="btn btn-primary" type="submit">Создать</button>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
   </main>

    <?php
    include('../../blocks/footer.php');
    include('../../blocks/modals.php');
    ?>
</div>

</body>

</html>