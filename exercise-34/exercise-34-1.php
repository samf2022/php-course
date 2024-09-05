<?php
$number = $_POST['number'];

function calculatePerfectNumber($number) {
    $addition = 0;
    for ($i = 1; $i <= $number; $i++) {
        if($i == $number){
            continue;
        }
    
        if($number % $i == 0) {
            $addition += $i;
        }
    }

    if($addition == $number) {
        return "$number is a perfect number";
    } else {
        return "$number is not a perfect number";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 34-1</title>
</head>
<body>
<h1><?= calculatePerfectNumber($number) ?></h1>
<h4>Go back to <a href="exercise-34.php">Exercise 34</a></h4>
</body>
</html>