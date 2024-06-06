<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$mysqli = mysqli_connect("localhost", "root", "", "jour09");

$sql = "SELECT AVG(capacite) AS moyenne_capacite FROM salle";
$result = mysqli_query($mysqli, $sql);


echo "<table>";

// Get field names for table header
$fields = mysqli_fetch_fields($result);
echo "<tr>";
foreach ($fields as $field) {
    echo "<th>" . $field->name . "</th>";
}
echo "</tr>";

// Output data rows
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
}

echo "</table>";

?>
</body>
</html>