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

    $sql = "SELECT * FROM `etage`";
    $result = mysqli_query($mysqli, $sql);

    $column_query = "SHOW COLUMNS FROM `etage`";
    $column_result = mysqli_query($mysqli, $column_query);

    echo "<table border ='1'>";
    echo "<thead><tr>";
    while ($column = mysqli_fetch_assoc($column_result)){
        echo "<th>" . $column["Field"] . "</th>";
    }
        echo "</tr></thead>";

        echo "<tbody>";

        $total_superficie = 0;
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        foreach($row as $value){
            echo "<td>" . $value . "</td>";
        }
        $total_superficie += $row["superficie"];
        echo "</tr>";
    }
    echo "<tr><td colspan='" . mysqli_num_fields($result) . "'>Total Superficie: " . $total_superficie . "</td></tr>";
    echo "</tbody>";
    echo "</table>";

    mysqli_close($mysqli);
    ?>
</body>
</html>