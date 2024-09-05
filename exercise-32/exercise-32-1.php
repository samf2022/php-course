<?php
    $date = new DateTime($_POST['date']);
    $day = $date->format('d');
    $month = $date->format('m');
    
    function determineSeason($day, $month){
        if($month >= 6 && $month <= 9){
            if(($month == 6 && $day >= 21) || ($month == 9 && $day <= 21)){
                return "Is summer!";
            }
        }
        
        return "Isn't summer!";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 32-1</title>
</head>
<body>
    <h1><?= determineSeason($day, $month) ?></h1>
    <h4>Go back to <a href="index.php">Exercise 32</a></h4>
</body>
</html>