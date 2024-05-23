<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function isPrime($number) {
if ($number <= 1) {
    return false;
}
for ($i = 2; $i <=sqrt($number); $i++) {
    if($number % $i ==0) {
        return false;
    }
}
return true;
    }
    for ($i = 2; $i <=1000; $i++){
        if (isPrime($i)){
            echo $i. "<br/>";
        }
    }
?>
    
</body>
</html>