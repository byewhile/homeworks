<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио</title>
    <meta name="description" content="Веб-студия - портфолио">
    <link rel="icon" href="./public/favicon.ico">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/portfolio.css">
    <script src="index.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <? require_once "./components/header.php" ?>
        <main>
            <div class="portfolioContainerText">
                <h2>Мы разрабатываем индивидуальные набор технологий</h2>
                <p>Организационные приоритеты со временем меняются, мы готовы работать с вашей командой, чтобы адаптировать продукты, которые мы создаем, к меняющимя потребностям</p>
            </div>
            <div class="portfolioContainerImg">
                <div>
                    <a href="https://byewhile.ru/find-emoji/" target="_blank">
                        <img src="./public/portfolioImg1.png" alt="Porfolio img">
                        <h3>byewhile.ru - найди emoji</h3>
                    </a>
                </div>
                <div>
                    <a href="https://byewhile.ru/dora-assembly/" target="_blank">
                        <img src="./public/portfolioImg2.png" alt="Porfolio img">
                        <h3>byewhile.ru - сборка Доры</h3>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>
</html>