<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leet Speak Convert</title>
</head>
<body>
    <form method="post" action="">
        <label for="stringInput">Input String</label>
        <input type="text" id="stringInput" name="stringInput" required><br><br>
        <input type="submit" name="submit" value="Convert to leet">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        echo "<p>Leet Speak is :"  . leetSpeak($_POST['stringInput']) . "</p>";
    }
    function leetSpeak($str){
        $leetMap = [
            'A' => '4', 'a' => '4',
            'B' => '8', 'b' => '8',
            'E' => '3', 'e' => '3',
            'G' => '6', 'g' => '6',
            'L' => '1', 'l' => '1',
            'S' => '5', 's' => '5',
            'T' => '7', 't' => '7'
        ];
        $leetstr = '';
    
        for ($i = 0; $i < strlen($str); $i++){
            $char = $str[$i];
            if (isset($leetMap[$char])){
                $leetstr .= $leetMap[$char];
            }else{
                $leetstr .= $char;
            }
        }
        return $leetstr;
    }
    ?>
</body>
</html>