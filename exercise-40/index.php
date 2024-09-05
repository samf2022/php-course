<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="exercise-40-1.php" method="post">
        <label for="color">Select Color:</label>
        <select name="color" id="color">
            <option value="">Color</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
            <option value="black">Black</option>
            <option value="white">White</option>
        </select>
        <br>
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" min="1" max="99">
        <br>
        <button type="submit">Submit</button>
    </form>
    <h4>Go back to <a href="../index.php">Menu</a></h4>
</body>
<?php

// Obtener el color seleccionado
if (isset($_POST["color"])) 
{
    $color_seleccionado = $_POST["color"];
} else {
    $color_seleccionado = "";
}

// Obtener el número seleccionado
if (isset($_POST["numero"])) 
{
    $numero_seleccionado = $_POST["numero"];
} else {
    $numero_seleccionado = "";
}

// Juntar las listas
if ($color_seleccionado != "" && $numero_seleccionado != "") {
    echo "<h3>Lista juntada</h3>";
    echo "$color_seleccionado:$numero_seleccionado";
}

?>
</html>