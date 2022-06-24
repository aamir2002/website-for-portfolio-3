<?php
session_start();
error_reporting(0);
include '../../path.php';
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

               <div class="row">
                  <h4 class="mb-4 text-center">Добавление записи</h4>
               </div>

               <div class="row add-post">
                  <form action="create.php" method="POST">

                     <div class="col mb-4">
                        <label for="title" class="form-label">Заголовок статьи</label>
                        <input type="text" class="form-control" placeholder="Title" id="title"
                               aria-label="Название статьи">
                     </div>

                     <div class="mb-3">Содержимое записи</div>

                     <div class="" id="editor">
                        <textarea class="form-control" id="textarea" rows="6"></textarea>
                     </div>

                     <div class="col input-group mb-4">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                     </div>

                     <select class="form-select mb-4" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>

                     <div class="col">
                        <button class="btn btn-primary" type="submit">Сохранить запись</button>
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
<script>
   ClassicEditor
       .create(document.querySelector('#editor'))
       .then(editor => {
          console.log(editor);
       })
       .catch(error => {
          console.error(error);
       });
</script>
</body>

</html>