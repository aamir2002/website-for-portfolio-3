<?php
error_reporting(0);
include '../../path.php';
session_start();
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
   <script src="../../assets/js/jquery-3.6.0.min.js"></script>
   <script src="../../assets/js/slick.min.js"></script>
   <script src="../../assets/js/slider.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
           integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
           crossorigin="anonymous"></script>

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
                  <a href="<?php echo BASE_URL . "admin/posts/create.php";?>" class="col-2 btn btn-success me-3">Добавить</a>
                  <a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-2 btn btn-warning">Управление</a>
               </div>

               <div class="row title-table fw-bold">
                  <h4 class="mb-4 text-center">Управление записями</h4>
                  <div class="col-1">ID</div>
                  <div class="col-5">Название</div>
                  <div class="col-4">Автор</div>
                  <div class="col-2 text-center">Управление</div>
               </div>

               <div class="row post">
                  <div class="id col-1">1</div>
                  <div class="title col-5">Статья</div>
                  <div class="author col-4">Admin</div>
                  <div class="edit col-1 text-center"><a href="">Edit</a></div>
                  <div class="del col-1 text-center"><a href="">Delete</a></div>
               </div>

               <div class="row post">
                  <div class="id col-1">1</div>
                  <div class="title col-5">Статья</div>
                  <div class="author col-4">Admin</div>
                  <div class="edit col-1 text-center"><a href="">Edit</a></div>
                  <div class="del col-1 text-center"><a href="">Delete</a></div>
               </div>

               <div class="row post">
                  <div class="id col-1">1</div>
                  <div class="title col-5">Статья</div>
                  <div class="author col-4">Admin</div>
                  <div class="edit col-1 text-center"><a href="">Edit</a></div>
                  <div class="del col-1 text-center"><a href="">Delete</a></div>
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