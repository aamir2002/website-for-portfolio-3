<?php
include 'app/database/db.php';

$errMsg = '';

function userAuth($user)
{
  $_SESSION['id'] = $user['id'];
  $_SESSION['username'] = $user['username'];
  $_SESSION['admin'] = $user['admin'];
  
  if ($_SESSION['admin']) {
    header('location: ' . BASE_URL . 'admin/posts/index.php');
  } else {
    header('location: ' . BASE_URL);
  }
}

// Код для формы регистрации

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
  $admin = 0;
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $passF = trim($_POST['pass-first']);
  $passS = trim($_POST['pass-second']);

  if ($username === '' || $email === '' || $passF === '') {
    $errMsg = "Не все поля заполнены!";
  } elseif (mb_strlen($username, 'UTF8') < 2) {
    $errMsg = "Логин должен быть более 2-х символов";
  } elseif ($passF !== $passS) {
    $errMsg = "Пароли не совпадают";
  } else {
    $existence = selectOne('users', ['email' => $email]);
    if ($existence['email'] === $email) {
      $errMsg = "Пользователь с такой почтой уже существует";
    } else {
      $pass = password_hash($passF, PASSWORD_DEFAULT);
      $post = [
        'admin' => $admin,
        'username' => $username,
        'email' => $email,
        'password' => $pass
      ];
      $id = insert('users', $post);
      $user = selectOne('users', ['id' => $id]);
      $_SESSION['id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['admin'] = $user['admin'];

      if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . 'admin/posts/index.php');
      } else {
        header('location: ' . BASE_URL);
      }
    }
  }
} else {
  $username = '';
  $email = '';
}

// Код для формы авторизации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
  $email = trim($_POST['email']);
  $pass = trim($_POST['password']);

  if ($email  === '' || $pass === '') {
    $errMsg = "Не все поля заполнены";
  } else {
    $existence = selectOne('users', ['email' => $email]);

    if ($existence && password_verify($pass, $existence["password"])) {
      $_SESSION['id'] = $existence['id'];
      $_SESSION['username'] = $existence['username'];
      $_SESSION['admin'] = $existence['admin'];

      if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . 'admin/posts/index.php');
      } else {
        header('location: ' . BASE_URL);
      }
    } else {
      $errMsg = "Ошибка авторизации";
    }
  }
} else {
  $email = '';
}
