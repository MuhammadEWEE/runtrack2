<!DOCTYPE html>
<html>
<head>
    <title>Data inner from 2 tables</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection fail: " . $conn->connect_error);
}

$sql = "SELECT nom FROM salle UNION ALL SELECT nom FROM etage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    echo "<table border='1'>";
    echo "<tr><th>Nom des salles et des etages</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nom"]. "</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 result";
}

$conn->close();
?>
</body>
</html>