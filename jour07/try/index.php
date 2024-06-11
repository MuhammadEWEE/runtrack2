<!DOCTYPE html>
<html>
<head>
    <title>Transformations de chaînes</title>
</head>
<body>
    <h1>Transformations de chaînes</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Chaîne de caractères : <input type="text" name="str" required><br>
        Fonction de transformation :
        <select name="function">
            <option value="bold">Mettre en gras les mots commençant par une majuscule</option>
            <option value="cesar">Décalage de caractères (César)</option>
            <option value="platform">Ajouter un underscore aux mots finissant par "me"</option>
        </select><br>
        <input type="submit" name="submit" value="Transformer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $function = $_POST["function"];

        switch ($function) {
            case "bold":
                echo bold($str);
                break;
            case "cesar":
                $offset = 2; // Décalage de 2 caractères par défaut
                echo cesar($str, $offset);
                break;
            case "platform":
                echo platform($str);
                break;
            default:
                echo "Fonction de transformation invalide.";
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