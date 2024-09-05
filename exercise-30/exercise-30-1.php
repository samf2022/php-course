<?php
    $string_one = $_POST['string_one'];
    $string_two = $_POST['string_two'];
    $compare = strcasecmp($string_one, $string_two);
    function compareStrings($compare){
        if($compare == 0){
            echo 'The strings are equal';
        } else if($compare < 0){ 
            echo 'The first string is less than the second';
        } else {
            echo 'The first string is greater than the second';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 30-1</title>
</head>
<body>
    <h1><?= compareStrings($compare) ?></h1>
    <h4>Go back to <a href="exercise-30.php">Exercise 30</a></h4>
</body>
</html>