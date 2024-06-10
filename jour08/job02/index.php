<?php

if(isset($_COOKIE['nbvisits'])){
$nbvisits = $_COOKIE['nbvisits'] + 1;
}else{
    $nbvisits = 1;
}

setcookie('nbvisits',$nbvisits,time()+(86400 * 30), '/');

if(isset($_POST['reset'])){

setcookie ('nbvisits','',time() - 3600,'/');
$nbvisits = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Count Number Of Visiters</h1>
    <p>Visit Time <?php echo $nbvisits; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset Counter</button>
    </form>

</body>
</html>