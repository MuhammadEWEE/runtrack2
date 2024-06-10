
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];

    if (!isset($_SESSION["prenoms"])) {
        $_SESSION["prenoms"] = array();
    }
    array_push($_SESSION["prenoms"], $prenom);
}

if (isset($_POST["reset"])) {
    unset($_SESSION["prenoms"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de prénom</title>
</head>
<body>
    <h1>Ajouter un prénom</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Prénom: <input type="text" name="prenom" required>
        <input type="submit" name="submit" value="Envoyer">
    </form>

    <h2>Liste des prénoms</h2>
    <?php
    if (isset($_SESSION["prenoms"])) {
        echo "<ul>";
        foreach ($_SESSION["prenoms"] as $prenom) {
            echo "<li>" . $prenom . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Aucun prénom ajouté.";
    }
    ?>

    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>
