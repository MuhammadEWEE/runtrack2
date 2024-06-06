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
   $result = mysqli_query($mysqli,"SELECT prenom, nom, naissance FROM `etudiants` 
   WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'");
 

   ?>
<h3>The studens who were born between 1998-2018</h3>
   <table border =1px solid>
    <thead>
        <tr>
            <td>ID</td>
            <td>Prenom</td>
            <td>Nom</td>
           
        </tr>
    </thead>
    <?php
    while($row = $result-> fetch_assoc()):
    ?>
    <tr>
        
        <td><?php echo $row['prenom']?></td>
        <td><?php echo $row['nom']?></td>
        <td><?php echo $row['naissance']?></td>
       
    </tr><br></br>
    <?php endwhile ?>
   </table>
</body>
</html>