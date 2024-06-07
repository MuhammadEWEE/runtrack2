<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: connexion.php');
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'moduleconnexion');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login = $_SESSION['login'];
$sql = "SELECT * FROM user WHERE login='$login'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "UPDATE user SET prenom='$prenom', nom='$nom', password='$password' WHERE login='$login'";
        if ($conn->query($sql) === TRUE) {
            echo "Profil mis à jour avec succès.";
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier le profil</title>
</head>
<body>
    <h1>Modifier le profil</h1>
    <form method="post" action="">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $user['prenom']; ?>" required><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $user['nom']; ?>" required><br>
        <label for="password">Nouveau mot de passe:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="confirm_password">Confirmer le mot de passe:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <input type="submit" value="Mettre à jour">
    </form>
</body>
</html>