<?php 
include 'path.php'; 
include 'app/controllers/users.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php include('blocks/head.php'); ?>

<body>
  <div class="page">
    <?php include('blocks/header.php'); ?>

    <main>
      <div class="main-page">
        <div class="container">
          <div class="row main-body">
            <div class="col-12 col-md-8 mx-auto text-center">
              <h4 class="text-uppercase mb-4">Главная страница</h4>
              <div class="main-subtitle">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, ab. Illum
                exercitationem repellat quaerat hic blanditiis eum consequatur porro dolor?</div>
              <button class="btn btn-lg text-uppercase btn-primary" data-bs-toggle="modal"
                data-bs-target="#writeUs">Написать нам</button>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="content row">
          <div class="main-content col-md-9 col-12">

            <h4>Публикации</h4>

            <div class="post row">
              <div class="img col-12 col-md-4">
                <img src="assets/img/works/work1.jpg" alt="" class="img-thumbnail">
              </div>
              <div class="post-text col-12 col-md-8">
                <h4>
                  <a href="">Статья</a>
                </h4>
                <div>
                  <i class="bi bi-person"> Имя автора</i>
                  <i class="bi bi-calendar"> Март 11, 2019</i>
                </div>
                <p class="preview-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam sit harum, hic vitae pariatur
                  similique magni facilis ab illum commodi? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Tempora, accusantium eveniet? Laborum sunt rerum tenetur adipisci. Optio facere veniam ullam!
                </p>

                <div class="tags">
                  <a href="">Программирование</a>
                </div>
              </div>
            </div>

            <div class="post row">
              <div class="img col-12 col-md-4">
                <img src="assets/img/works/work2.jpg" alt="" class="img-thumbnail">
              </div>
              <div class="post-text col-12 col-md-8">
                <h4>
                  <a href="">Python. Как освоить Python за 1 год</a>
                </h4>
                <div>
                  <i class="bi bi-person"> Имя автора</i>
                  <i class="bi bi-calendar"> Март 11, 2019</i>
                </div>

                <p class="preview-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam sit harum, hic vitae pariatur
                  similique magni facilis ab illum commodi? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Exercitationem corporis suscipit doloribus reiciendis, quos aliquam quam et. Fugit, velit voluptates
                  voluptatibus cupiditate id dolores quia libero exercitationem perspiciatis aliquam harum nemo nihil
                  eius delectus veniam in minima nostrum quam eaque maiores dolorum, magnam fuga error temporibus.
                  Mollitia non assumenda fuga!
                </p>

                <div class="tags">
                  <a href="">Python</a>
                </div>

              </div>
            </div>

            <div class="post row">
              <div class="img col-12 col-md-4">
                <img src="assets/img/works/work3.jpg" alt="" class="img-thumbnail">
              </div>
              <div class="post-text col-12 col-md-8">
                <h4>
                  <a href="">Программирование на JavaScript</a>
                </h4>
                <div>
                  <i class="bi bi-person"> Имя автора</i>
                  <i class="bi bi-calendar"> Март 11, 2019</i>
                </div>
                <p class="preview-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam sit harum, hic vitae pariatur
                  similique magni facilis ab illum commodi? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Blanditiis nihil itaque beatae qui! Ratione non fugiat corporis quia nesciunt ab incidunt at libero
                  deleniti exercitationem hic recusandae, sapiente soluta. Quis illo dicta enim voluptatibus recusandae?
                  Quia ullam rem eum consequuntur, debitis maiores repellendus deleniti dolorum possimus recusandae
                  velit. Quisquam, pariatur.
                </p>

                <div class="tags">
                  <a href="">Веб-разработка</a>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar col-md-3 col-12">
            <div class="section search">
              <h3>Найти</h3>
              <form action="index.php" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Search...">
              </form>
            </div>

            <div class="section topics">
              <h3>Категории</h3>
              <ul>
                <li><a href="">Веб-разраотка</a></li>
                <li><a href="">Программирование</a></li>
                <li><a href="">Python</a></li>
                <li><a href="">Игры</a></li>
                <li><a href="">Софт</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('blocks/footer.php'); ?>
    <?php include('blocks/modals.php'); ?>
  </div>
</body>

</html>