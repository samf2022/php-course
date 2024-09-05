<?php
$color = $_POST['color'];
$number = $_POST['number'];

function joinElements($color, $number){

    $join = "";
    if(isset($color) && isset($number)){
        if($color != "" && $number != ""){
            echo "Join List!! <br/>";
            $join = "$color: $number";
        }
    }
    return $join;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 40-1</title>
</head>
<body>
    <h3><?= joinElements($color, $number) ?></h3>
    <h4>Go back to <a href="exercise-40.php">Exercise 40</a></h4>
</body>
</html>