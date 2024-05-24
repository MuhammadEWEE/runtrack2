<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $vowels = "aeiouAEIOU";
    $dic = 
    for ($i = 0; $i < strlen($str); $i ++) {
        if (strpos($vowels,$str[$i]) !== false){
        echo $str[$i];
    }
}
?>
</body>
</html>