<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action method="get">
        <input type="date" name="date1" required>
        <input type="date" name="date2" required>
        <input type="submit">
    </form>
    <? if (isset($_GET["date1"])) {
    function getDays($start, $end, $format) {
        $day = 86400;
        $start = strtotime($start . " -1 days");
        $end = strtotime($end . " +1 days");
        $nums = ceil(($end - $start) / $day); 
        
        $days = [];
        for ($i = 1; $i < $nums; $i++) { 
            $days[$i] = date($format, ($start + ($i * $day)));
        }
        return $days;
    }
    $dates = getDays($_GET["date1"], $_GET["date2"], "Y-m-d");
    print_r($dates);
    } ?>
</body>
</html>