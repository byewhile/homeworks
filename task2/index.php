<?php
if (isset($_POST["name"])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $text = trim($_POST["text"]);
    $date = date("d-m-Y H:i:s");

    $file = fopen("data.txt", "a");
    fwrite($file, $name . "\n" . $email . "\n" . $date . "\n" . $text . "---");
    fclose($file);
}

if (file_exists("data.txt")) {
    $fileStrings = file_get_contents("data.txt");
    $fileArray = explode("---", $fileStrings);
    $fileArrays = [];

    for ($i = 0; $i < sizeof($fileArray); $i++) { 
        array_push($fileArrays, explode("\n", $fileArray[$i]));
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form action method="post">
            <h1>Гостевая книга</h1>
            <input type="text" name="name" placeholder="Введите ваше имя" autocomplete="on" required>
            <input type="email" name="email" placeholder="Введите ваш email" autocomplete="on" required>
            <textarea name="text" cols="5" rows="5" placeholder="Введите вашe сообщение" maxlength="64" required></textarea>
            <input type="submit">
        </form>

        <div class="notes">
            <h2>Все сообщения</h2>
            <? if (isset($fileArrays)) { ?>
                <? for ($i = sizeof($fileArrays) - 2; $i >= 0; $i--) { ?>
                    <div>
                        <? for ($j = 0; $j < sizeof($fileArrays[$i]); $j++) { ?>
                            <p><? echo $fileArrays[$i][$j] ?></p>
                        <? } ?>
                    </div>
            <? }} else { ?>
                    <div>
                        <p>Сообщений нет</p>
                    </div>
            <? } ?>
        </div>
    </div>
</body>
</html>