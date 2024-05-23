<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        echo "<i>$i</i> </br>";
    } elseif ($i >= 25 && $i <= 30) {
        echo "<u>$i</u> </br>";
    } elseif ($i == 42) {
        echo "LaPlateforme </br>";
    } else {
        echo "$i </br>";
    }
}
    ?>
    
</body>
</html>