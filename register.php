<?php
session_start();
require_once('db.php');

if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = $_POST['login'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO `users` (username, password) VALUES ('$login', '$password')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $login;

        if (isset($_GET['url'])) {
            header('Location: ' . $_GET['url']);
        } else {
            header('Location: http://mysite/Сайт%20дипломной%20работы%20.php');
        }
        exit;
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Не удалось получить данные из формы";
}
?>