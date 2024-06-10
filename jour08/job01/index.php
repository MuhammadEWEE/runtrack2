<?php
session_start();

if(!isset($_SESSION['nbvisits'])){
$_SESSION['nbvisits']=0;
}
if(isset($_POST['reset'])){
$_SESSION['nbvisits']= 0;
}else{
    $_SESSION['nbvisits']++;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Count Number Of Visiters</h1>
    <p>Visit Time <?php echo $_SESSION['nbvisits']; ?></p>
    <form methode="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>