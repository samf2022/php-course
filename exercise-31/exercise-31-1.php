<?php
    $date_one = new DateTime($_POST['date_one']);
    $date_two = new DateTime($_POST['date_two']);

    $format_date_one = $date_one->format('Y-m-d');
    $format_date_two = $date_two->format('Y-m-d');
    
    function calculateDays($date_one, $date_two){
        $difference_between_dates = $date_one->diff($date_two);
        return $difference_between_dates->days;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 31-1</title>
</head>
<body>
    <h1>Between <?= $format_date_one ?> and <?= $format_date_two ?> there are <?= calculateDays($date_one, $date_two) ?> days</h1>
    <h4>Go back to <a href="exercise-31.php">Exercise 31</a></h4>
</body>
</html>