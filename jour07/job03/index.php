<?php
 function gethello (){
    include 'getPlateforme.php';
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
<?php
echo "<h2>HELLO</h2>";
gethello(); 
  
 
?>
</body>
</html>