<?php
 $original_date = new DateTime($_POST['date']);
 $date = new DateTime($_POST['date']);
 $day_numbers = $_POST['day_numbers'];
 $resultDate = $date->modify('+' . $day_numbers . ' days');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 35-1</title>
</head>
<body>
<h1>
    <?= 
        "The date is " . $original_date->format('Y-m-d') . "<br/>" .
        "The day numbers entered are " . $day_numbers . "<br/>" .
        "The result date is " . $resultDate->format('Y-m-d') . "\n"
    ?>
</h1>
<h4>Go back to <a href="index.php">Exercise 35</a></h4>
</body>
</html>