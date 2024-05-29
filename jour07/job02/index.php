<?php
 function hello ($day){
    if ($day == true){
    echo "<h2>Good Morning</h2>";
}else {
    echo"<h2>Good Evening</h2>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php hello(false); 
//hello(true),hello(false);  
 
?>
</body>
</html>