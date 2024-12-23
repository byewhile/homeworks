<?php
if (!isset($_GET["page"])) {
    header("Location: index.php?page=1");
}
require_once "db.php" 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action method="post">
        <input type="text" name="username" minlength="10" maxlength="32" placeholder="Введите ваше имя" required>
        <input type="email" name="email" placeholder="Введите ваш email" required>
        <textarea name="message" placeholder="Введите ваше сообщение" minlength="10" cols="30" rows="5" required></textarea>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST["username"])) {
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);
        $ip_address = $_SERVER["REMOTE_ADDR"];
        $browser = $_SERVER['HTTP_USER_AGENT'];

        $sql = "INSERT INTO messages (username, email, message, ip_address, browser) VALUES ('$username', '$email', '$message', '$ip_address', '$browser')";
        $conn->query($sql);
    }
    $page = ($_GET["page"] - 1) * 20;
    $sql = "SELECT username, message FROM messages ORDER BY id DESC LIMIT 20 OFFSET $page";
    $result = $conn->query($sql);

    $messages = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $messages[] = $row;
        }
    }
    $messagesCount = sizeof($messages);
    ?>
    <div>
        <?php for ($i = 0; $i < $messagesCount; $i++) { ?>
            <div>
                <span>Имя: <?php echo $messages[$i]["username"] ?></span>
                <span>Сообщение: <?php echo $messages[$i]["message"] ?></span>
            </div>
        <?php } ?>
    </div>
    <div>
        <ul>
            <?php
            $sql = "SELECT id FROM messages";
            $result = $conn->query($sql);
            $pageCount = $result->num_rows;

            for ($i = 1; $i <= ceil($pageCount / 20); $i++) { ?>
                <a href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a>
            <?php } ?>
        </ul>
    </div>
</body>
</html>