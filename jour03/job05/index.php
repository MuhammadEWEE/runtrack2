<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

       
<?php
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        $count++;
    }
    $vowels = 0;
    $consonnes = 0;
    for ($i = 0; $i<$count; $i++) {
        if ($str[$i] == "a" || $str[$i] == "e" || $str[$i] =="i" || $str[$i] == "o" || $str[$i] == "u"){
            $vowels = $vowels +1;
        }else{
            $consonnes = $consonnes +1;
        }
    }
    ?>
    <table border = 1>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
    </thead>
        <tr>
            <td><?=$vowels?></td>
            <td><?=$consonnes?></td>
        </tr>
</table>


</body>
</html>