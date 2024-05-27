<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
   Name: <input type="text" name="name" />
   Age: <input type="text" name="surname" />
   <input type="submit" />
</form>
<?php
if(!empty($_GET)){
   $number_argument_get = count($_GET);
    echo "<p>The number of argument is : $number_argument_get</p>";
}
?> 
</body>
</html>