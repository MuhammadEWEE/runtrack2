<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {
    // Print leading spaces for alignment
    for ($j = 1; $j <= ($hauteur - $i); $j++) {
        echo "&nbsp;&nbsp;";  // Use double spaces to match the horizontal alignment
    }

    // Print the outline of the triangle
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        if ($k == 1 || $k == (2 * $i - 1) || $i == $hauteur) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }

    // Print a line break after each row
    echo "<br />";
}
?>
    
</body>
</html>