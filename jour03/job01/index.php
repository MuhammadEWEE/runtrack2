<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <table border="1">
            <tr>
                <th>Number</th>
                <th>Status</th>
            </tr>
            <?php
            $numbers = [200, 204, 173, 98, 171, 404, 459];
            foreach ($numbers as $number) {
                echo "<tr>";
                echo "<td>$number</td>";
                if ($number % 2 == 0) {
                    echo "<td>Pair</td>";
                } else {
                    echo "<td>Unpair</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>