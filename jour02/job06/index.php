<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Initialize variables for width and height of the rectangle
    $width = 20;
    $height = 10;

    // Outer loop to iterate over the rows
    for ($J = 0; $J < $height; $J++) {
        echo "|"; // Print the left border of the rectangle

        // Check if the current row is the top or bottom row
        if ($J == 0 || $J == $height - 1) {
            // Inner loop to print the top or bottom border of the rectangle
            for ($i = 0; $i < $width; $i++) {
                echo "-&nbsp-"; // Print dashes to form the border
            }
        } else {
            // Inner loop to print spaces inside the rectangle
            for ($j = 0; $j + 1 < $width - 1; $j++) {
                echo "&nbsp&nbsp&nbsp&nbsp"; // Print spaces using HTML non-breaking space entities
            }
        }

        echo "|"; // Print the right border of the rectangle
        echo "<br />"; // Move to the next line
    }
?>
    
</body>
</html>