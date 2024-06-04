<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $mysqli = mysqli_connect("localhost","root","","jour09");
   $result = mysqli_query($mysqli,"SELECT id,prenom,nom,naissance,sexe,email
    FROM `etudiants` WHERE naissance > DATE_SUB(CURDATE(),INTERVAL 18 YEAR)");
 

   ?>

   <table border =1px solid>
    <thead>
        <tr>
            <td>ID</td>
            <td>Prenom</td>
            <td>Nom</td>
            <td>Naissance</td>
            <td>Sexe</td>
            <td>Email</td>
        </tr>
    </thead>
    <?php
    while($row = $result-> fetch_assoc()):
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['prenom']?></td>
        <td><?php echo $row['nom']?></td>
        <td><?php echo $row['naissance']?></td>
        <td><?php echo $row['sexe']?></td>
        <td><?php echo $row['email']?></td>
    </tr><br></br>
    <?php endwhile ?>
   </table>
</body>
</html>