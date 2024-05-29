<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display GET Arg</title>
</head>
<body>
 <form method="GET" action="index.php">
    <label for="firstname">Firstname</label>
    <input type="text" id="firstname" name="firstname"><br><br>
    <label for="name">Name</label>
    <input type="text" id="name" name="name"><br><br>
    <input type="submit" value="submit">
 </form>

    <?php
   if(!empty($_GET)){
    echo '<table border="1">';
    echo '<thead>';
        echo'<tr>';
            echo '<th>Argument</th>';
            echo '<th>Value</th>';
        echo '</tr>';
    echo '</thead>';
    echo '<tbogy>';
        foreach ($_GET as $key =>$value){
            echo'<tr>';
                echo'<td>' . $key . '</td>';
                echo'<td>' . $value . '</td>';
            echo'</tr>';
        }
    echo'<tbody>';
    echo'</table>';
   }else{
    echo'No GET arguments were sent.';
   }
    ?>
</body>
</html>