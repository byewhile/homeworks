<? require_once "components/head.php" ?>
    <title>Главная страница</title>
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    <div class="wrapper">
        <? require_once "components/header.php" ?>
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
                    <img src="public/homeImg1.jpg" alt="Home img1">
                    <img src="public/homeImg2.jpg" alt="Home img2">
                    <img src="public/homeImg3.jpg" alt="Home img3">
                    <img src="public/homeImg4.jpg" alt="Home img4">
                </div>
            </div>
        </main>
    </div>
</body>
</html>