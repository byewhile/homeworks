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

    if (isset($_GET["delete"])) {
        $deleteId = $_GET["delete"];
        $sql = "DELETE FROM `first_work` WHERE id = $deleteId";
        $conn->query($sql);
    }

    if (isset($_POST["fullNameEdit"]) || isset($_POST["date"])) {
        $id = $_POST["id"];
        $fullName = trim($_POST["fullNameEdit"]);
        $date = $_POST["date"];
    
        $sql = "UPDATE `first_work` SET value = '$fullName', action_date = '$date' WHERE id = '$id'";
        $conn->query($sql);
        $_GET["edit"] = null;
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
    <table border="1">
        <?php for ($i = 0; $i < sizeof($students); $i++) { ?>
            <tr>
                <?php if (!empty($_GET["edit"]) && $_GET["edit"] == $students[$i]["id"]) { ?>
                    <form action method="post">
                        <td><input type="text" name="id" value="<?php echo $students[$i]["id"] ?>" hidden></td>
                        <td><input type="text" name="fullNameEdit" value="<?php echo $students[$i]["value"] ?>" required></td>
                        <td><input type="datetime-local" name="date" value="<?php echo $students[$i]["action_date"] ?>" required></td>
                        <td><input type="submit" value="Сохранить"></td>
                    </form>
                <?php } else { ?>
                    <td><?php echo $students[$i]["value"] ?></td>
                    <td><?php echo $students[$i]["action_date"] ?></td>
                    <td><a href="?edit=<?php echo $students[$i]["id"] ?>">Редактировать</a></td>
                    <td><a href="?delete=<?php echo $students[$i]["id"] ?>">Удалить</a></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
