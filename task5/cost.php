<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор стоимости</title>
    <meta name="description" content="Веб-студия - калькулятор стоимости">
    <link rel="icon" href="./public/favicon.ico">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/cost.css">
    <script src="index.js" defer></script>
    <script src="calculator.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <? require_once "./components/header.php" ?>
        <main>
            <div class="calculatorContainer">
                <div>
                    <input type="checkbox" id="hosting">
                    <label for="hosting">Хостинг <span>(15 000 ₽)</span></label>
                </div>
                <div>
                    <input type="checkbox" id="design">
                    <label for="design">Индивидуальный дизайн <span>(120 000 ₽)</span></label>
                </div>
                <div>
                    <input type="checkbox" id="logo">
                    <label for="logo">Разработка логотипа <span>(50 000 ₽)</span></label>
                </div>
                <div>
                    <input type="checkbox" id="seo">
                    <label for="seo">SEO-оптимизация <span>(55 000 ₽)</span></label>
                </div>
                <div>
                    <input type="checkbox" id="testing">
                    <label for="testing">Тестирование <span>(10 000 ₽)</span></label>
                </div>
                <div>
                    <input type="checkbox" id="copyright">
                    <label for="copyright">Копирайтинг <span>(30 000 ₽)</span></label>
                </div>
                <div>
                    <input type="checkbox" id="photo">
                    <label for="photo">Фотосъемка товаров <span>(25 000 ₽)</span></label>
                </div>
                <div>
                    <input type="checkbox" id="smm">
                    <label for="smm">Создание SMM-ресурсов <span>(20 000 ₽)</span></label>
                </div>
                <div>
                    <input type="checkbox" id="spa">
                    <label for="spa">SPA-приложение <span>(350 000 ₽)</span></label>
                </div>
                <h2>Итого цена: <span>0</span> ₽</h2>
            </div>
        </main>
    </div>
</body>
</html>