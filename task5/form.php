<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заявки услуг</title>
    <meta name="description" content="Веб-студия - форма заявки услуг">
    <link rel="icon" href="./public/favicon.ico">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/form.css">
    <script src="index.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <? require_once "./components/header.php" ?>
        <main>
            <div class="formContainerText">
                <span>Свяжитесь с нами прямо сейчас</span>
            </div>
            <div class="formContainerForm">
                <form action="sendText.php" method="post">
                    <input type="text" name="name" maxlength="64" placeholder="Имя" autocomplete="on" required>
                    <input type="email" name="email" maxlength="255" placeholder="Электронная почта" autocomplete="on" required>
                    <textarea name="text" maxlength="300" placeholder="Сообщение" cols="30" rows="10" required></textarea>
                    <input type="submit" value="Связаться">
                </form>
            </div>
        </main>
    </div>
</body>
</html>