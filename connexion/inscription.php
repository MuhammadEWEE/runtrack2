<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $conn = new mysqli('localhost', 'root', '', 'moduleconnexion');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom', '$password')";
        if ($conn->query($sql) === TRUE) {
            header('Location: connexion.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./inscription.css">
</head>
<body>
<h1>Inscription</h1>
    <form method="post" action="">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login"  required><br>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="confirm_password">Confirmer le mot de passe:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <input type="submit" style="background-color:green; color:yellow;" value="S'inscrire" name="submit" >
    </form>
</body>
</html>