<?php
session_start();
require_once('db.php');

if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = $_POST['login'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM `users` WHERE username='$login' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $login;

        if (isset($_GET['url'])) {
            header('Location: ' . $_GET['url']);
        } else {
            header('Location: http://mysite/Сайт%20дипломной%20работы%20.php');
        }
        exit;
    } else {
        echo "Неправильный логин или пароль";
    }
} else {
    echo "Не удалось получить данные из формы";
}
?>
