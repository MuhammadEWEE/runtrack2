<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="">
        <label for="str">Text</label>
        <input type="text" id="str" name="str" required>

        <label for="function">Function</label>
        <select id="function" name="function" required>
            <option value="bold">Bold</option>
            <option value="ceasar">Ceasar</option>
            <option value="laplateforme">La Plateforme</option>
        </select>

        <label for="ceasarShift">Text position shift for ceasar :</label>
        <input type="number" id="ceasarShift" name="ceasarShift">

        <button type="submit" name="submit">Transform Text</button>

    </form>

    <?php
    if (isset ($_POST['submit'])){
        $str = ($_POST['str']);
        $function = ($_POST['function']);
        $ceasarShift = isset ($_POST['ceasarShift']) ? intval($_POST['ceasarShift']) : 2;

        if ($function == 'bold'){
            echo bold($str);
        }else if ($function == 'ceasar'){
            echo ceasar($str,$offset);
        }elseif ($function == 'laplateforme'){
            echo laplateforme($str);
        }

    }
    function bold($str) {
        $words = explode(" ", $str);
        $result = "";
        foreach ($words as $word) {
            $result .= "<b>" . ucfirst($word) . "</b> ";
        }
        return trim($result);
    }

    function cesar($str, $offset) {
        $result = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $result .= chr(ord($char) + $offset);
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

    function platform($str) {
        $words = explode(" ", $str);
        $result = "";
        foreach ($words as $word) {
            if (substr($word, -2) == "me") {
                $result .= $word . "_" . " ";
            } else {
                $result .= $word . " ";
            }
        }
        return trim($result);
    }
    ?>
</body>
</html>