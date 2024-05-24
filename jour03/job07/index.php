<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    if (strlen($str) > 1) {
        $firstChar = $str[0];
        $newStr = '';
        for ($i = 1; $i < strlen($str); $i++) {
            $newStr .= $str[$i];
        }
        $newStr .= $firstChar;
        echo "<p>Original: $str</p>";
        echo "<p>Modified: $newStr</p>";
    }
    ?> 
</body>
</html>