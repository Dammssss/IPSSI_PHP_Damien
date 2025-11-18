<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaireAge</title>
</head>
<body>
    <h1>Merci d'entrer votre age</h1>

    <form method="post">
        <label for="age">Age:</label>
        <input type="text" id ="age" name="age" required>
        <br><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    function school($age) {
        if ($age < 3) {
            return "creche";
        }
        else if ($age < 6) {
            return "maternelle";
        }
        else if ($age < 11) {
            return "primaire";
        }
        else if ($age < 16) {
            return "college";
        }
        else if ($age < 18) {
            return "lycee";
        }
        return"";
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $age = intval($_POST["age"]);
    $resultat = school($age);
    echo "vous etes au niveau <strong>$resultat</strong>";
    }
    ?>
</body>
</html>
