<?php
$date = new DateTime($_POST['date']);
$week_day = $date->format('w');

function determineWeekend($week_day) {
    if($week_day == 0 || $week_day == 6) {
        return "Is the weekend";
    } else {
        return "Is a weekday";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 33-1</title>
</head>
<body>
    <h1><?=determineWeekend($week_day)?></h1>
    <h4>Go back to <a href="index.php">Exercise 33</a></h4>
</body>
</html>