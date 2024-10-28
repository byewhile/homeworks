<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Идеальное место для создания уникальных и эффективных веб-решений! Разработка сайтов, веб-дизайн, SEO-оптимизацию и цифровой маркетинг.">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <script src="./bootstrap.bundle.min.js" defer></script>
    <title>Наши проекты</title>
</head>
<body class="p-3">
    <? require_once "./components/header.php" ?>
    <main class="container">
        <h1>Наши проекты</h1>
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex">
                <div>
                    <img src="./images/portfolio1.png" alt="Портфолио">
                </div>
                <div class="d-flex flex-column justify-content-center text-center">
                    <p class="fs-4">Интернет-магазин производителя сумок и рюкзаков Grizzly</p>
                    <a href="https://grizzlyshop.ru/" target="_blank" class="fs-4">grizzlyshop.ru</a>
                </div>
            </li>
            <li class="list-group-item d-flex">
                <div>
                    <img src="./images/portfolio2.png" alt="Портфолио">
                </div>
                <div class="d-flex flex-column justify-content-center text-center">
                    <p class="fs-4">Интернет-магазин производителя аксессуаров - ADJ</p>
                    <a href="https://adj.style/" target="_blank" class="fs-4">adj.style</a>
                </div>
            </li>
        </ul>
    </main>
</body>
</html>