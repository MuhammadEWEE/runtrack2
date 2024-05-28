<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET_Pair,Unpair</title>
</head>
<body>
    <form method="get" action="index.php">
        <label for="number">Put number here</label>
        <input type="text" id="number" name="number"><br></br>
        <input type="submit" Value="submit">
    </form>
    <?php
    if (isset($_GET['number'])) {
        $number = $_GET['number'];
        if ($number % 2 == 0){
            echo'<p>This is pair number</p>';
        }else{
            echo'<p>This is unpair number</p>';
        }
    }
    ?>
    
</body>
</html>