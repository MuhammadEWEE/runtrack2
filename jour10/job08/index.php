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
    // if (!$mysqli) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    $sql = "SELECT * FROM `salle`";
    $result = mysqli_query($mysqli, $sql);

    $column_query = "SHOW COLUMNS FROM `salle`";
    $column_result = mysqli_query($mysqli, $column_query);

    echo "<table border='1'>";
    echo "<thead><tr>";
    while ($column = mysqli_fetch_assoc($column_result)) {
        echo "<th>" . $column["Field"] . "</th>";
    }
    echo "</tr></thead>";
    echo "<tbody>";

    $total_capacity = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        $total_capacity += $row["capacite"];
        echo "</tr>";
    }

    echo "<tr><td colspan='" . mysqli_num_fields($result) . "'>Total Capacity: " . $total_capacity . "</td></tr>";
    echo "</tbody>";
    echo "</table>";

    mysqli_close($mysqli);
    ?>
</body>
</html>