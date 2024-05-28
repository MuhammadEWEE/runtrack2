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
    function is_positive_integer($value) {
        // Check if a string contains only digits
        $digits = '0123456789';
        for ($i = 0; $i < strlen($value); $i++) {
            if (strpos($digits, $value[$i]) === false) {
                return false;
            }
        }
        // Convert the string to an integer and check if it's positive
        $integer_value = (int)$value;
        return $integer_value > 0;
    }

    if (isset($_GET['width']) && isset($_GET['height'])) {
        $width = $_GET['width'];
        $height = $_GET['height'];

        if (is_positive_integer($width) && is_positive_integer($height)) {
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
                for ($j = 0; $j < 2 * $width; $j++) {
                    echo "";
                }
                echo "|";
                echo "<br>";
            }
            echo "</pre>";
        } else {
            echo "<p>Please enter positive integer values for width and height.</p>";
        }
    }
    ?>
</body>
</html>