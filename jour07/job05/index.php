<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accurences</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">String</label>
        <input type="text" id="str" name="str" required><br></br>
        <label for="char">Char</label>
        <input type="text" id="char" name="char" maxlength="1" required><br></br>
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
    function occurrences($str, $char) {
        if (!is_string($str) || !is_string($char) || strlen($char) !=1){
        }

        $count = 0; 
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == $char) {
                $count++;
            }
    }
        return $count;
    }

    if (isset($_POST['submit'])) {
        $str = $_POST['str'];
        $char = $_POST['char'];
    

        $result = occurrences($str, $char);
        echo "<p>Number of '$char' in '$str' is : $result</p>";
}
    ?>
</body>
</html>