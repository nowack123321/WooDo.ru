<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php'); 
    exit;
} ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="3ace2b349f56448fade4f584817cdc44.ico" type="image/x-icon">
    <title>Интернет магазин по продажам компьютерной техники и комплекктующих WooDo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
.header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #1a1a1a;
        }
        
        .logo-container {
            display: flex;
        align-items: center;
            margin-right: -45%; 
        }
        
        .logo {
            height: 50px;
        }
        
        .button-container {
            display: flex;
            gap: 15px;
        }
        
        .button {
            text-decoration: none;
            color: #fff; 
            background-color: transparent;
            padding: 12px 12px;
            font-size: 16px;
            font-weight: lighter;
            transition: color 0.3s, transform 0.3s;
            font-family: 'Montserrat', sans-serif;
        }
        
        .button:hover {
            color: #c0ff01; 
            transform: scale(1.05);
        }
        
        .button:active {
            transform: scale(0.95); 
        }
        </style>
        <style>
        
        .qwe {
        background-color: #1a1a1a;
        top: 10px;
        font-family: 'Montserrat';
        padding: 12px 12px;
        font-size: 13px;
        text-align: right; 
        border-bottom: 1px solid #ccc ;
        
    }

    .qwe .button {
        color: #fff;
        background-color: transparent;
        padding: 8px 11px; 
        margin-left: 5px; 
        font-weight: lighter;
    }

    .qwe .button:hover {
        color: #c0ff01; 
        transform: scale(1.05);
    }
        
    </style>

<body>

    <div class="qwe">
            <a href="http://mysite/123.php" class="button">Корзина</a>
            <a href="http://mysite/123.php" class="button">Поддержка</a>
            <a href="http://mysite/123.php" class="button">О нас</a>
            <a href="http://mysite/123.php" class="button">Контакты</a>
        </div>
       
<header class="header">
    
        <div class="logo-container">
        <a href="http://mysite/Сайт%20дипломной%20работы%20.php"><img src="Скриншот 14-05-2024 134746-no-bg-preview (carve.photos).png" alt="Logo" class="logo" id="logo"></a>
        </div>
   
        <div class="buttons-container">
            <a href="http://mysite/Игровые_пк.php" class="button">ИГРОВЫЕ ПК</a>
            <a href="http://mysite/Ноутбуки.php" class="button">НОУТБУКИ</a>
            <a href="http://mysite/Смартфоны.php" class="button">СМАРТФОНЫ</a>
            <a href="http://mysite/Комплектующие.php" class="button">КОМПЛЕКТУЮЩИЕ</a>
        </div>


<form action="logout.php" method="post" style="display: inline;">
        <button class="glow-on-hover" type="submit">Выйти</button>
    </form>

</header>
    <div>
<h1>Скоро тут будет всё!</h1> 

 <p>Ps: Владимир Шитиков</p> 
</div>
<script src="123.js"></script>
</body>
</html>