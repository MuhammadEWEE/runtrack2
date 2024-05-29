<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<form action="index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="firstname">firstname:</label>
        <input type="text" id="firstname" name="firstname"><br><br>
        <label for="age">Age:</label>
        <input type="text" id="age" name="eage"><br><br>
        <input type="submit" value="Submit">
</form>
<?php
    $count = 0;
    foreach ($_POST as $key => $value) {
        $count++;
    }

    echo "The number of POST arguments sent is: " . $count;
    ?>


</body>
</html>