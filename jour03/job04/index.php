<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $str = "Dans l'espace, personne ne vous entend crier";
    $mhd = 0;
   // $count = mb_strlen($str); = easy function sys
   for($mhd = 0; isset($str[$mhd]); $mhd++); 
   // echo strlen($str); = print direct without loop count
    echo "There're $mhd letters in this sentence."
  

    

?>
</body>
</html>