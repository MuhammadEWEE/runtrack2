<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
</form>
<?php
    $count = 0;
    foreach ($_GET as $key => $value) {
        $count++;
    }

    echo "The number of GET arguments sent is: " . $count;
    ?>


</body>
</html>