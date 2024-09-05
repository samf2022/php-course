<?php
define('API_URL', 'https://whenisthenextmcufilm.com/api');

$ch = curl_init(API_URL);
//Indica que se recibe el resultado de la petición, pero no lo muestra en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP app</title>
    <!-- Centered viewport -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: grid;
            place-content: center;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <img src="<?= $data['poster_url']; ?>" width="300" alt="logo" style="border-radius: 10px;">
        </section>

        <hgroup>
            <h3><?= $data['title']; ?> se estrena en <?= $data['days_until']; ?> días</h3>
            <p>Fecha de estreno: <?= $data['release_date']; ?></p>
        </hgroup>
    </main>
</body>
</html>