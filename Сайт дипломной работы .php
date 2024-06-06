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
    <title>Интернет магазин по продажам компьютерной техники и комплектующих WooDo</title>
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
            transition: color 0.3s, transform 0.3s;
            font-family: 'Montserrat', sans-serif;
            font-weight: lighter;
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
    .text-overlay {
        position: absolute;
        top: 30%; 
        left: 30%; 
        transform: translate(-50%, -50%); 
        color: #c0ff01; 
        font-family: 'Montserrat', sans-serif;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 3em;
        font-weight: lighter;

        text-align: center;
    }

    .text-overlay2 {
        position: absolute;
        bottom: 35%; 
        left: 30%; 
        transform: translate(-50%, -50%);
        color: #888;
        font-weight: lighter;
        padding: 22px;
        border-radius: 5px;
        font-size: 1.2em;
        text-align: center;
        max-width: 30%; 
    }

    .text-overlay1 {
        position: absolute;
        top: 10%; 
        left: 30%; 
        transform: translate(-50%, -50%); 
        color: #c0ff01; 
        font-family: 'Montserrat', sans-serif;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 3em;
        font-weight: lighter;

        text-align: center;
    }

    .text-overlay3 {
        position: absolute;
        bottom: -15%; 
        left: 30%; 
        transform: translate(-50%, -50%);
        color: #888;
        font-weight: lighter;
        padding: 22px;
        border-radius: 5px;
        font-size: 1.2em;
        text-align: center;
        max-width: 30%; 
    }

    .text-overlay4 {
        position: absolute;
        top: 10%; 
        left: 30%; 
        transform: translate(-50%, -50%); 
        color: #c0ff01; 
        font-family: 'Montserrat', sans-serif;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 3em;
        font-weight: lighter;

        text-align: center;
    }

    .text-overlay5 {
        position: absolute;
        bottom: -15%; 
        left: 30%; 
        transform: translate(-50%, -50%);
        color: #888;
        font-weight: lighter;
        padding: 22px;
        border-radius: 5px;
        font-size: 1.2em;
        text-align: center;
        max-width: 30%; 
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
            <a href="http://mysite/Мониторы.php" class="button">МОНИТОРЫ</a>
            <a href="http://mysite/Комплектующие.php" class="button">КОМПЛЕКТУЮЩИЕ</a>
        </div>
<form action="logout.php" method="post" style="display: inline;">
        <button class="glow-on-hover" type="submit">Выйти</button>
    </form>

</header>

    <div class="slideshow-container">
        <div class="slide active">
            <img src="download.jpg" alt="Slide 1">
            <div class="text-overlay">МЫ РАДЫ ВИДЕТЬ ВАС ЗДЕСЬ!</div>
            <div class="text-overlay2">
                <br> 
                Мы ценим ваше посещение и готовы предложить вам лучшее из мира компьютерной техники. 
                И стремимся обеспечить вас качественными продуктами,
                профессиональным обслуживанием и приятным опытом покупок.<br></div>
        </div>
        <div class="slide">
        <img src="download.jpg" alt="Slide 1">
            <div class="text-overlay1">ЧТО МЫ МОЖЕМ ПРЕДЛОЖИТЬ</div>
            <div class="text-overlay3">
                <br> Мы гордимся тем, что предлагаем нашим клиентам не только высококачественную компьютерную технику, 
                но и ряд дополнительных услуг и преимуществ: <br>
                <br>Профессиональная консультация: Наши эксперты готовы ответить на все ваши вопросы и помочь вам
                 с выбором наиболее подходящих устройств в соответствии с вашими потребностями.<br>
                 <br>Постоянное обновление ассортимента: Мы следим за последними технологическими новинками и постоянно обновляем наш ассортимент, 
                 чтобы предложить вам самые современные и инновационные устройства.<br>
                 <br>Доступные цены: Мы стремимся сделать качественную технику доступной для всех, поэтому мы предлагаем 
                 конкурентоспособные цены и различные акции и скидки для наших клиентов.<br>


            </div>
        </div>
        <div class="slide">
        <img src="download.jpg" alt="Slide 1">
            <div class="text-overlay4">ПОДБЕРИ НА СВОЙ ВКУС</div>
            <div class="text-overlay5">
                <br>У нас есть широкий ассортимент продукции, чтобы каждый мог найти что-то подходящее именно для себя:<br>
                <br>Разнообразие моделей: Мы предлагаем различные модели компьютеров, ноутбуков, планшетов и мониторов, чтобы удовлетворить 
                самые разные потребности и предпочтения наших клиентов.<br>
                <br>Параметры, соответствующие вашим требованиям: Независимо от того, нужен вам компьютер для игр, работы, обучения или развлечений, 
                мы поможем вам подобрать устройство с нужными техническими характеристиками.<br>
                <br>Различные цветовые решения и дизайн: Мы учитываем ваши предпочтения не только в технических характеристиках, но и 
                в дизайне устройств. У нас вы можете найти продукцию разных цветов и стилей.<br>
            </div>
        </div>
    </div>

    <div class="container">

        <hr class="separator">
      </div>


<section class="products">
    <div class="container">
        <h2>Популярные товары</h2>
        <div class="product-card-container">
            <div class="product-card">
                <img src="hyperpc-original-dual-green.jpg" alt="Product 1">
                <h3>Игровой компьютер HyperPC GamerX</h3>
                <p>Мощные премиальные игровые ПК</p>
                <span class="price">208 200 ₽</span>
                <a href="http://mysite/Игровые_пк.php" class="btn">Подробнее</a>
            </div>
                <div class="product-card">
                    <img src="hyperpc-custom-page-alt.jpg" alt="Product 1">
                    <h3>Игровой компьютер HyperPC GamerX</h3>
                    <p>Эксклюзивные с кастомным охлаждением </p>
                    <span class="price">945 600 ₽</span>
                    <a href="http://mysite/Игровые_пк.php" class="btn">Подробнее</a>
                </div>

                <div class="product-card">
                    <img src="hyperpc-gaming-optimal-alt.jpg" alt="Product 1">
                    <h3>Игровой компьютер HyperPC GamerX</h3>
                    <p>Сбалансированные игровые ПК</p>
                    <span class="price">114 700 ₽</span>
                    <a href="http://mysite/Игровые_пк.php" class="btn">Подробнее</a>
                </div>              
        </div>
    </div>
</section>
<section class="products">
    <div class="container">
        <div class="product-card-container">
            <div class="product-card">
                <img src="hyperpc-pro-dual-alt.jpg" alt="Product 1">
                <h3>Рабочии станции</h3>
                <p>Профессиональное решение</p>
                <span class="price">130 400 ₽</span>
                <a href="http://mysite/Игровые_пк.php" class="btn">Подробнее</a>
            </div>
                <div class="product-card">
                    <img src="hyperpc-play-laptop-17-upd.jpg" alt="Product 1">
                    <h3>Игровые ноутбуки</h3>
                    <p>Возьму игру с собой</p>
                    <span class="price">160 300 ₽</span>
                    <a href="http://mysite/Ноутбуки.php" class="btn">Подробнее</a>
                </div>

                <div class="product-card">
                    <img src="hyperpc-teaser-configurator.jpg" alt="Product 1">
                    <h3>Конфигуратор ПК</h3>
                    <p>Создайте свой компьютер мечты</p>
                    <span class="price">100 000 ₽</span>
                    <a href="http://mysite/Комплектующие.php" class="btn">Подробнее</a>
                </div>              
        </div>
    </div>
</section>
    <section class="products">
        <div class="container">
        <h2 class="q2">Периферия</h2>
        <p class="q2">Здесь вы можете выбрать для себя ассортимент периферийных устройств.</p>

        
        <div class="product-card2">
            <a href="http://mysite/Мониторы.php">
                <img class="button" src="hyperpc-monitor-small-pic_webp.jpg" alt="Product 1"> 
            </a>

        </div>
        <div class="product-card2">
            <a href="http://mysite/Комплектующие.php">
                <img class="button" src="hyperpc-keyboard-small-pic_webp.jpg" alt="Product 1">
            </a>

        </div>
        <div class="product-card2">
            <a href="http://mysite/Комплектующие.php">
                <img class="button" src="hyperpc-mouse-small-pic_webp.jpg" alt="Product 1">
            </a>

        </div>
        <div class="product-card2">
            <a href="http://mysite/Комплектующие.php">
                <img class="button" src="hyperpc-headset-small-pic.jpg" alt="Product 1">
            </a>

        </div>
    </div>
    <section class="why-us">
        <div class="container">
            <h2 class="q3" >Почему выбирают WooDo?</h2>
            <p class="q2" ></p>

        </div>
    </section>
   
          <video class="containerV" width="560" height="315" autoplay muted loop>
            <source src="hyperpc-what-makes-us-the-first.mp4" type="video/mp4">
          </video>
          

          <div class="center-container">
            <div class="square-container"> <p class="text"> 
                <br> Партнеры NVIDIA, Intel и Microsoft </br>
                <br> Самый продвинутый онлайн конфигуратор компьютеров</br>
                <br> Только лучшие комплектующие и передовые технологии</br>
                <br> Профессиональная сборка и кастомизация</br>
                <br> Специальное стресс-тестирование и установка ПО</br>
                <br> Доставка, установка и настройка компьютера под ключ</br>
                <br> Собственное производство</br>
                <br> Шоурум в Москве с компьютерами в наличии</br>
                <br> Сервисные центры в более чем 40 крупных городах России.</br> </p> </div>
          </div>


<div class="container">

    <hr class="separator">
  </div>


<footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <h3>О нас</h3>
          <p>Здесь можно добавить информацию о вашей компании и ее деятельности.</p>
        </div>
        <div class="footer-section">
          <h3>Связаться с нами</h3>
          <p>Адрес: ул. Складочная 1с10, Москва, Россия<br>
             Телефон: +7 (495) 120-35-20<br>
             Ежедневно с 10:00 до 21:00<br>
             Email: info@example.com</p>
        </div>
        <div class="footer-section">
          <h3>Подписаться на рассылку</h3>
          <form action="tel:+74951203520" method="post">
            <input type="email" name="email" placeholder="Введите ваш email" required>
            <button type="submit">Подписаться</button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">
        &copy; Дизайн и разработка сайта - Владимир Шитиков.
      </div>
    </div>
  </footer>


  <script src="script.js"></script>


</body>
</html>
