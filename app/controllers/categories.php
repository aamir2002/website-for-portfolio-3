<?php
include '../../path.php';
include "../../app/database/db.php";

$errMsg = '';
$categories = selectAll('categories');

//Создания категории

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category-create'])) {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === '') {
        $errMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne('categories', ['name' => $name]);
        if ($existence['name'] === $name) {
            $errMsg = "Данная категория уже существует";
        } else {
            $category = [
                'name' => $name,
                'description' => $description
            ];
            $id = insert('categories', $category);
            $category = selectOne('categories', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/categories/index.php');
        }
    }
} else {
    $name = '';
    $description = '';
}

// Редактирование категории

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    tt($_GET);
}