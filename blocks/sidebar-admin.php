<?php
error_reporting(0);
include "../path.php";
?>

<div class="sidebar col-3">
    <div class="text-center p-3">
        <h5 style="color: #000;">Admin panel</h5>
    </div>
    <ul>
        <li>
            <a href="<?php echo BASE_URL . "admin/posts/index.php";?>">Записи</a>
        </li>
        <li>
            <a href="<?php echo BASE_URL . "admin/users/index.php";?>">Пользователи</a>
        </li>
        <li>
            <a href="<?php echo BASE_URL . "admin/categories/index.php";?>">Категории</a>
        </li>
    </ul>
</div>
