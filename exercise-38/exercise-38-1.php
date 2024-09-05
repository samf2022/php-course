<?php
$height = $_POST['height'];
function equilateralTriangle($height) {
    for ($i = 1; $i <= $height; $i++) {
        for ($y = $height - $i; $y >0; $y--) 
        {
            echo "&nbsp;&nbsp;";
        } 
        for ($y = 1; $y < $i; $y++)
        {
            echo "**";
        }
        echo "*";
        echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 38-1</title>
</head>
<body>
 <?= equilateralTriangle($height) ?>
 <h4>Go back to <a href="exercise-38.php">Exercise 38</a></h4>
</body>
</html>