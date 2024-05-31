<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformation de Texte</title>
</head>
<body>

<form method="post" action="">
    <label for="str">Texte :</label>
    <input type="text" id="str" name="str" required>
    
    <label for="fonction">Fonction :</label>
    <select id="fonction" name="fonction" required>
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    
    <label for="decalage">Décalage :</label>
    <input type="number" id="decalage" name="decalage" value="2">
    
    <button type="submit" name="submit">Transformer</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    $decalage = isset($_POST['decalage']) ? intval($_POST['decalage']) : 2;

    if ($fonction == 'gras') {
        echo gras($str);
    } elseif ($fonction == 'cesar') {
        echo cesar($str, $decalage);
    } elseif ($fonction == 'plateforme') {
        echo plateforme($str);
    }
}

function gras($str) {
    $words = explode(' ', $str);
    foreach ($words as &$word) {
        if (ctype_upper($word[0])) {
            $word = "<b>$word</b>";
        }
    }
    return implode(' ', $words);
}

function cesar($str, $decalage = 2) {
    $result = '';
    $decalage = $decalage % 26;
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $code = ord($char);
            if (ctype_upper($char)) {
                $char = chr((($code - 65 + $decalage) % 26) + 65);
            } else {
                $char = chr((($code - 97 + $decalage) % 26) + 97);
            }
        }
        $result .= $char;
    }
    return $result;
}

function plateforme($str) {
    $words = explode(' ', $str);
    foreach ($words as &$word) {
        if (substr($word, -2) == 'me') {
            $word .= '_';
        }
    }
    return implode(' ', $words);
}
?>

</body>
</html>