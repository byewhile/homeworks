<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "db.php";

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $text = trim($_POST["text"]);

    $sql = "INSERT INTO tickets (name, email, text) VALUES ('$name', '$email', '$text')";
    $conn->query($sql);
}
header("Location: form.php");