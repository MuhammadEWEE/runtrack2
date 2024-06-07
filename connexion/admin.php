<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] != 'admin') {
    header('Location: connexion.php');
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'moduleconnexion');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
</head>
<body>
    <h1>Administration</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Password</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["login"] . "</td><td>" . $row["prenom"] . "</td><td>" . $row["nom"] . "</td><td>" . $row["password"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Aucun utilisateur trouvé</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>