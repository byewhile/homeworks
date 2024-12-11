<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <meta name="description" content="Веб-студия - главная страница">
    <link rel="canonical" href="http://localhost/task5/index.php">
    <link rel="icon" href="./public/favicon.ico">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/home.css">
    <script src="index.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <? require_once "./components/header.php" ?>
        <main>
            <div class="homeContainerText">
                <p>Мы внедряем цифровые технологии</p>
                <div>
                    <h2>Создавайте лучшие цифровые продукты и приложения</h2>
                    <p>Мы помогаем вам ориентироваться в изменениях, создавать правильные продукты для ваших пользователей и повышать квалификацию ваших команд — одновременно</p>
                </div>
                <a href="portfolio.php">Узнать больше</a>
            </div>
            <div class="homeContainerImg">
                <div class="imgsContainer">
                    <img src="./public/homeImg1.jpg" alt="Home img">
                    <img src="./public/homeImg2.jpg" alt="Home img">
                    <img src="./public/homeImg3.jpg" alt="Home img">
                    <img src="./public/homeImg4.jpg" alt="Home img">
                </div>
            </div>
        </main>
    </div>
</body>
</html>