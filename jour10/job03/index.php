<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
   
</head>
<body>

    <?php

   
     $mysqli = mysqli_connect("localhost","root","","jour09");
     $result = mysqli_query($mysqli,"SELECT prenom,nom,naissance FROM `etudiants` WHERE (sexe='femme')");
     $column = mysqli_query($mysqli,"SHOW COLUMNS FROM `etudiants`");?>

     <table border =1px solid>
     <thead>
         <tr>
           
             <td>Prenom</td>
             <td>Nom</td>
             <td>Naissance</td>
            
         </tr>
       </thead>
       <?php
        echo "<tbody>";
        foreach ($result as $row){
            echo "<tr>";
            foreach($row as $value){
              echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
     
    ?>
</body>
</html>