<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw a House</title>
    <style>
        pre {
            font-family: monospace;
            line-height: 1.2;
        }
    </style>
</head>
<body>
    <form method="get" action="">
        <label for="width">Width:</label>
        <input type="text" id="width" name="width" required><br><br>
        <label for="height">Height:</label>
        <input type="text" id="height" name="height" required><br><br>
        <input type="submit" value="Draw House">
    </form>

    <?php
    if (isset($_GET['width']) && isset($_GET['height'])) {
        $width = intval($_GET['width']);
        $height = intval($_GET['height']);

        if ($width > 0 && $height > 0) {
            echo "<pre>";

            // Draw the roof
            for ($i = 0; $i < $height; $i++) {
                for ($j = 0; $j < $width - $i; $j++) {
                    echo "&nbsp;";
                }
                echo "/";
                for ($k = 0; $k < 2 * $i; $k++) {
                    echo "_";
                }
                echo "\\";
                echo "<br>";
            }

            // Draw the body of the house
            for ($i = 0; $i < $height; $i++) {
                echo "|";
                for ($j = 0; $j < 2 * $height; $j++) {
                    echo "&nbsp;";
                }
                echo "|";
                echo "<br>";
               
            }
            for ($k = 0; $k < 2 * $i; $k++) {
                echo "_";
            }
            echo "</pre>";
        } else {
            echo "<p>Please enter positive integer values for width and height.</p>";
        }
    }
    ?>
</body>
</html>