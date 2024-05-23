<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        // Créez le tableau contenant les nombres spécifiés
        $nombres = [200, 204, 173, 98, 171, 404, 459];

        // Parcourez le tableau
        foreach ($nombres as $nombre) {
            // Vérifiez si le nombre est pair ou impair
            if ($nombre % 2 == 0) {
                // Affichez que le nombre est pair
                echo "$nombre est paire<br />";
            } else {
                // Affichez que le nombre est impair
                echo "$nombre est impaire<br />";
            }
        }
        ?>
   
</body>
</html>