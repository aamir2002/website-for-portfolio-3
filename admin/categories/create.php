<?php
error_reporting(0);
session_start();
include '../../path.php';
include '../../app/controllers/categories.php';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- scripts -->
    <script src="../../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
    <script src="../../assets/js/slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
<div class="page">
    <?php include "../../blocks/header-admin.php" ?>

    <main>
        <div class="container">
            <div class="row">
                <?php include '../../blocks/sidebar-admin.php'?>

                <div class="posts col-9">
                    <div class="button row d-flex justify-content-end mb-5">
                        <a href="<?php echo BASE_URL . "admin/categories/create.php";?>" class="col-3 btn btn-success me-3">Создать</a>
                        <a href="<?php echo BASE_URL . "admin/categories/index.php";?>" class="col-2 btn btn-warning">Управление</a>
                    </div>

                    <div class="row">
                        <h4 class="mb-4 text-center">Создать категорию</h4>
                    </div>

                    <div class="row add-post">
                        <form action="create.php" method="POST">

                           <div class="col mb-4">
                              <p style="color: red"><?php echo $errMsg?></p>
                           </div>

                            <div class="col mb-4">
                                <label for="title" class="form-label">Имя категории</label>
                                <input value="<?=$name;?>" name="name" type="text" class="form-control" placeholder="Имя категории" id="title" aria-label="Имя категории">
                            </div>

                            <div class="col mb-4">
                                <label for="content" class="form-label">Описание категории</label>
                                <textarea name="description" class="form-control" id="content" rows="4"><?=$description;?></textarea>
                            </div>

                            <div class="col">
                                <button name="category-create" class="btn btn-primary" type="submit">Создать категорию</button>
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