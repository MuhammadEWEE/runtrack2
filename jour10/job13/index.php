<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
   
</head>
<body>

    <?php

   
     $mysqli = mysqli_connect("localhost","root","","jour09");
     $result = mysqli_query($mysqli,"SELECT nom FROM `salle`,`etage`");
     $column = mysqli_query($mysqli,"SHOW COLUMNS FROM `salle`,`etage`");?>
   

     <table border =1px solid>
     <thead>
         <tr>
           
             <td>nom des salles</td>
             <td>nom de leur étage.</td>
            
            
         </tr>
       </thead>
      <?php
        echo "<tbody>";
        // foreach ($result as $row){
        //     echo "<tr>";
        //     foreach($row as $value){
        //       echo "<td>" . $value . "</td>";
        //     }
        //     echo "</tr>";
        // }
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["salle"] . "</td>";
            echo "<td>" . $row["etage"] . "</td>";
            echo "</tr>";
        }
    ?>
</body>
</html>