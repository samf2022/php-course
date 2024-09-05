<?php
    $selected_country = $_POST['country'];

    function showCountry($selected_country) {
        if ($selected_country != "") {
            echo "The selected country is: $selected_country";
        } else {
            echo "There is not selected country";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= showCountry($selected_country) ?></h1>
    <h4>Go back to <a href="exercise-39.php">Exercise 39</a></h4>
</body>
</html>