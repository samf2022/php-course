<?php
$number = $_POST['number'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 37-1</title>
</head>
<body>
<?php
    for($i = 1; $i <= $number; $i++) {
        if($i % 2 == 0){
            echo $i . "</br>";
        }
    }
?>
<h4>Go back to <a href="index.php">Exercise 37</a></h4>
</body>
</html>