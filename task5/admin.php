<?php
require_once "db.php";
if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM admins WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        setcookie("admin", true, time() + 300);

        $sql = "SELECT * FROM tickets";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_row()) {
                $tickets[] = $row;
            }
        }
    }
    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/admin.css">
</head>
<body>
    <? if (isset($_COOKIE["admin"])) {
        $tickets = [];

        $sql = "SELECT * FROM tickets";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_row()) {
                $tickets[] = $row;
            }
        }
        for ($i = 0; $i < sizeof($tickets); $i++) { 
    ?>
        <div class="ticket">
            <span>Номер заявки: <? echo $tickets[$i][0] ?></span>
            <span>Имя: <? echo $tickets[$i][1] ?></span>
            <span>Email: <a href="mailto:<? echo $tickets[$i][2] ?>"><? echo $tickets[$i][2] ?></a></span>
            <span>Сообщение: <? echo $tickets[$i][3] ?></span>
        </div>
    <? }} else { ?>
        <form action method="post">
            <input type="text" name="login" maxlength="64" placeholder="Логин" autocomplete="on" required>
            <input type="password" name="password" maxlength="32" placeholder="Пароль" required>
            <input type="submit" value="Войти">
        </form>
    <? } ?>
</body>
</html>