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
      <div class="container">
        <div class="content row">
          <div class="main-content col-md-9 col-12">

            <h4 class="single_post-title">Заголовок статьи Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Voluptates deserunt sunt doloremque ullam corrupti dolorum repellendus necessitatibus repellat!
              Voluptatibus, ipsum.</h4>

            <div class="single_post row">
              <div class="tags">
                <a href="">Веб-разработка</a>
              </div>
              <div>
                <i class="bi bi-person"> Имя автора</i>
                <i class="bi bi-calendar"> Март 11, 2019</i>
              </div>
              <div class="img col-12">
                <img src="assets/img/works/work1.jpg" alt="" class="img-thumbnail">
              </div>
              <div class="single_post-text col-12">
                <h1>Заголовок 1</h1>
                <h2>Заголовок 2</h2>
                <h3>Заголовок 3</h3>
                <h4>Заголовок 4</h4>
                <h5>Заголовок 5</h5>
                <h6>Заголовок 6</h6>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis quasi optio error eveniet
                  sapiente. Nostrum saepe eius at nesciunt totam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis quasi optio error eveniet
                  sapiente. Nostrum saepe eius at nesciunt totam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis quasi optio error eveniet
                  sapiente. Nostrum saepe eius at nesciunt totam!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis quasi optio error eveniet
                  sapiente. Nostrum saepe eius at nesciunt totam!</p>
                <a href="">Ссылка</a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus itaque, ipsum ducimus enim
                  vitae vero non minus perferendis similique necessitatibus quas laboriosam, quibusdam labore commodi
                  quo? Aliquid harum laudantium expedita provident! Recusandae animi rerum corrupti eos illum quasi
                  excepturi libero optio, sint culpa rept quis t dignissimos!
                  Sed ducimus eaque, repudiandae, nemo iusto voluptas doloribus ipsum ut at labore odit debitis, saepe
                  quia ipsam vel aspernatur inventore exercitationem quod similique quibusdam! Voluptas odio reiciendis
                  similique in, earum ipsum, esse culpa dolorem dolore eveniet reprehenderit cupiditate? Maiores iusto</p>
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