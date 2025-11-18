<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doubleBoucle</title>
</head>
<body>

    <form method="POST">
        <label>Entrez un nombre :</label>
        <input type="number" name="nombre" required>
        <button type="submit">Envoyer</button>
    </form>

    <?php

    if (!empty($_POST['nombre'])) {

        $n = intval($_POST['nombre']);

        for ($i = 1; $i <= $n; $i++) { 
            for ($j = 1; $j <= $i; $j++) { 
                echo $i;
            }
            echo "<br>";
        }
    }

    ?>
</body>
</html>
