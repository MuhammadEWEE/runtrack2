<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $BL = "TRUE";
    $ITG = 420;
    $STR = "HELLO";
    $FL = 99.99;
   echo "
   <table border='1'>
   <thead>
   <tr>
     <th>Type</th>
     <th>Name</th>
     <th>Value</th>
   </tr>
   </thead>
   <tbody>
   <tr>
     <td>Booleen</td>
     <td>BL</td>
     <td>" . $BL . "</td>
   </tr>
   <tr>
     <td>Integer</td>
     <td>ITG</td>
     <td>" . $ITG . "</td>
   </tr>
    <tr>
        <td>String</td>
        <td>STR</td>
        <td>" . $STR . "</td>
    </tr>
    <tr>
        <td>Float</td>
        <td>FL</td>
        <td>" . $FL . "</td>
    </tr>
    </tbody>
 </table>";
    ?>
    
</body>
</html>