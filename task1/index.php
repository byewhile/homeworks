<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="get">
        <input type="date" name="date1" required>
        <input type="date" name="date2" required>
        <input type="submit">
    </form>
    <?php
    if (isset($_GET["date1"])) {
        $date1 = strtotime($_GET["date1"]);
        $date2 = strtotime($_GET["date2"]);

        $diffSeconds = abs($date1 - $date2);
        $diffYears = floor($diffSeconds / 31536000);
        $diffDays = floor($diffSeconds / 86400);
        $diffHours = $diffDays * 24;
        $diffMinutes = $diffHours * 60; 
    ?>
        <div>
            <span>Разница дат (<? echo $_GET["date1"] ?> — <? echo $_GET["date2"] ?>):</span>
            <ul>
                <li>В годах: <? echo $diffYears ?></li>
                <li>В днях: <? echo $diffDays ?></li>
                <li>В часах: <? echo $diffHours ?></li>
                <li>В минутах: <? echo $diffMinutes ?></li>
                <li>В секундах: <? echo $diffSeconds ?></li>
            </ul>
        </div>
    <? } ?>
</body>
</html>