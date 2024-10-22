<?php
/*
Создать в БД MySQL 2 таблицы products(id, cat_id, title, price, about), catalog(id, catalog_name, sort, view).
Написать сценарий на PHP, который при запуске автоматически заполнит эти таблицы с необходимыми свазями.
Наименование рубрик и товаров генерировать с помощью функции mt_rand, параметр sort должен содержать приоритет сортироки в зависимости от наименования рубрики. 
Необходимо заполнить 5 рубрик с 10 товарами в каждом.
*/
$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "shopes";
$conn = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

$catalog = [];
$products = [];

for ($i = 0; $i < 5; $i++) { 
    $heading = [];

    $rnd = mt_rand(100, 1000);
    $heading[] = "Рубрика_$rnd";
    $heading[] = 0;
    $rnd = mt_rand(1, 6);
    $heading[] = $rnd;

    $catalog[] = $heading;
}
sort($catalog);

for ($i = 0; $i < sizeof($catalog); $i++) {
    $catalog[$i][1] = $i + 1;

    $sql = $conn->prepare("INSERT INTO catalog (catalog_name, sort, view) VALUES (?, ?, ?)");
    $sql->bind_param("sii", $catalog[$i][0], $catalog[$i][1], $catalog[$i][2]);
    $sql->execute();
}

for ($i = 0; $i < sizeof($catalog) * 10; $i++) {
    $heading = [];

    if ($i % 10 == 0) {
        $cat_id = $i / 10 + 1;
    }
    $heading[] = $cat_id;

    $rnd = mt_rand(100, 1000);
    $heading[] = "Товар_$rnd";
    $rnd = mt_rand(10, 100) / 10;
    $heading[] = $rnd;
    $heading[] = "Текст";

    $products[] = $heading;
}
sort($products);

for ($i = 0; $i < sizeof($products); $i++) {
    $sql = $conn->prepare("INSERT INTO products (cat_id, title, price, about) VALUES (?, ?, ?, ?)");
    $sql->bind_param("isds", $products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3]);
    $sql->execute();
}