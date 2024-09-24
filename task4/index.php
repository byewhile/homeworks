<?php
$server = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "student_9";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
</head>
<body>
    <form action method="post">
        <input type="text" name="firstName" placeholder="Введите имя" required>
        <input type="text" name="lastName" placeholder="Введите фамилию" required>
        <input type="submit">
    </form>
    <?php 
    if (isset($_POST["firstName"])) {
        $firstName = trim($_POST["firstName"]);
        $lastName = trim($_POST["lastName"]);
        $fullName = $firstName . " " . $lastName;

        $sql = "INSERT INTO `first_work` (value) VALUES ('$fullName')";
        $conn->query($sql);
    }

    if (isset($_POST["fullNameEdit"]) || isset($_POST["date"])) {
        $id = $_POST["id"];
        $fullName = trim($_POST["fullNameEdit"]);
        $date = $_POST["date"];
    
        $sql = "UPDATE `first_work` SET value = '$fullName', action_date = '$date' WHERE id = '$id'";
        $conn->query($sql);
    } 

    $sql = "SELECT * FROM `first_work`";
    $result = $conn->query($sql);

    $students = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($students, $row);
        } 
    } 
    ?>

    <? for ($i = 0; $i < sizeof($students); $i++) { ?>
    <form action method="post">
        <input type="text" name="id" value="<? echo $students[$i]["id"] ?>" hidden>
        <input type="text" name="fullNameEdit" value="<? echo $students[$i]["value"] ?>" required>
        <input type="datetime-local" name="date" value="<? echo $students[$i]["action_date"] ?>" required>
        <input type="submit" value="Редактировать">
    </form>
    <? } ?>
</body>
</html>