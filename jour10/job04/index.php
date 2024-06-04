<?php
     $mysqli = mysqli_connect("localhost","root","","jour09");
     $result = mysqli_query($mysqli,"SELECT prenom,nom,naissance,sexe,email FROM `etudiants` WHERE prenom LIKE 'T%'");
     $column = mysqli_query($mysqli,"SHOW COLUMNS FROM `etudiants`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1px solid>
        <thead>
            <tr>
                <td width="10%">Prenom</td>
                <td width="10%">Nom</td>
                <td width="30%">Naissance</td>
                <td width="10%">Sexe</td>
                <td width="40%">Email</td>
            </tr>
        </thead>
    
    <?php 
    while($row = $result->fetch_assoc()):
     ?>
<tr>
    <td><?php echo $row['prenom']; ?></td>
    <td><?php echo $row['nom']; ?></td>
    <td><?php echo $row['naissance']; ?></td>
    <td><?php echo $row['sexe']; ?></td>
    <td><?php echo $row['email']; ?></td>
</tr><br></br>
 <?php endwhile ?>   
 </table> 
</body>
</html>