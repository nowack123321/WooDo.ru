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
    <style>
    .section-container {
            background-color: #6046FF;
            color: #fff;
            padding: 30px;
            border-radius: 28px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); 
            font-family: 'Montserrat', sans-serif;
            font-weight: lighter;
            font-size: 1.6em;
        }
        
        
     .qew2{
            font-size: 21px;
            font-family: 'Montserrat', sans-serif;
            font-weight: lighter;
        }

        .text-overlay {
        position: absolute;
        top: 30%; 
        left: 20%; 
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
        bottom: 40%; 
        left: 20%; 
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
            <img  src="321321321.png" alt="Slide 1">
            <div class="text-overlay">БОЛЬШОЕ РАЗНООБРАЗИЕ</div>
            <div class="text-overlay2">
                <br>Подберите компьютер, который подойдет для любых игр! 
                    Либо самостоятельно соберите комплектацию ПК и проверьте комплектующие 
                    на совместимость с помощью конфигуратора.<br></div>
        </div>
    
    </div>

 
    <section class="products">
        <div class="container">
            <div class="section-container"><h3>Мощные игровые ПК</h3>
                <p class="qew2">Мощные игровые компьютеры для максимальных настроек графики в играх, на базе процессоров Intel Core и видеокарт NVIDIA GeForce RTX. Отлично подходят для киберспортивных игроков и геймеров, ценящих плавность игрового процесса с высоким FPS на максимальных графических настройках. Выбор чемпионов.</p></div>
            
            <div class="container">

                <hr class="separator">
              </div>
            <div class="computers-container">
            <div class="product-card-container">
                <div class="product-card">
                    <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                    <h3>Мощные</h3>
                    <p></p>
                    <span class="price">0 ₽</span>
                    <a href="" class="btn">Купить</a>
                </div>
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 2">
                        <h3>Мощные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div>
    
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 3">
                        <h3>Мощные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div>
                    
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 4">
                        <h3>Мощные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 5">
                        <h3>Мощные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 6">
                        <h3>Мощные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 


                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 7">
                        <h3>Мощные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 8">
                        <h3>Мощные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 9">
                        <h3>Мощные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <div class="section-container"><h3>Оптимальные игровые компьютеры</h3>
                <p class="qew2">Современные игровые компьютеры с процессорами Intel Core и видеокартами NVIDIA GeForce RTX предлагают идеальное сочетание производительности и стоимости. Максимум эффективности без лишнего.</p></div>
            
            <div class="container">

                <hr class="separator">
              </div>
            <div class="product-card-container">
                <div class="product-card">
                    <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                    <h3>Оптимальные</h3>
                    <p></p>
                    <span class="price">0 ₽</span>
                    <a href="" class="btn">Купить</a>
                </div>
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Оптимальные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div>
    
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Оптимальные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div>
                    
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Оптимальные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Оптимальные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Оптимальные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 


                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Оптимальные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Оптимальные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Оптимальные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <div class="section-container"><h3>Кастомные компьютеры</h3>
                <p class="qew2">Эксклюзивная линейка компьютеров для тех, кто не ищет компромиссов в играх. Конфигурации на основе самых мощных процессоров Intel Core и видеокарт NVIDIA GeForce RTX обеспечивают высший уровень производительности, уникальные корпуса с RGB-подсветкой и системой водяного охлаждения. Персонализированные варианты для самых изысканных геймеров.</p></div>
            
            <div class="container">

                <hr class="separator">
              </div>
            <div class="product-card-container">
                <div class="product-card">
                    <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                    <h3>Кастомные</h3>
                    <p></p>
                    <span class="price">0 ₽</span>
                    <a href="" class="btn">Купить</a>
                </div>
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Кастомные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div>
    
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Кастомные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div>
                    
                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Кастомные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Кастомные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Кастомные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 


                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Кастомные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Кастомные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 

                    <div class="product-card">
                        <img src="583157425c04515880bcdb49.jpg" alt="Product 1">
                        <h3>Кастомные</h3>
                        <p></p>
                        <span class="price">0 ₽</span>
                        <a href="" class="btn">Купить</a>
                    </div> 
            </div>
        </div>
    </section>
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
            &copy; 2024 Все права защищены. Дизайн и разработка сайта - Владимир Шитиков.
          </div>
        </div>
      </footer>

      <script src="script2.js"></script>
</body>
</html>