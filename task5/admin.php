<?php
require_once "db.php";
session_start();
if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM admins WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["admin"] = true;
    }
    header("Location: admin.php");
}
require_once "components/head.php" ?>
    <title>Админ</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    <?php if (isset($_SESSION["admin"])) {
        $tickets = [];

        $sql = "SELECT * FROM tickets";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $tickets[] = $row;
            }
        }
        for ($i = 0; $i < sizeof($tickets); $i++) { ?>
        <div class="ticket">
            <span>Номер заявки: <?php echo $tickets[$i]["id"] ?></span>
            <span>Имя: <?php echo $tickets[$i]["name"] ?></span>
            <span>Email: <a href="mailto:<?php echo $tickets[$i]["email"] ?>"><?php echo $tickets[$i]["email"] ?></a></span>
            <span>Сообщение: <?php echo $tickets[$i]["text"] ?></span>
        </div>
    <?php }} else { ?>
        <form action method="post">
            <input type="text" name="login" maxlength="64" placeholder="Логин" autocomplete="on" required>
            <input type="password" name="password" maxlength="32" placeholder="Пароль" required>
            <input type="submit" value="Войти">
        </form>
    <?php } ?>
</body>
</html>
