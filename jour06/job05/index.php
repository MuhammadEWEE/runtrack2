<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown 3 Style</title>
</head>
<body>
    <?php
    $selected_style ='';
    if (isset($_POST['style'])){
        $selected_style = ($_POST['style']);
        echo '<link rel="stylesheet" href="' . $selected_style . '.css">';
    }
    ?>
    <form method="post" action="">
        <label for="style">Logo apple evolution</label>
        <select name="style" id="style">
            <option value="style1"<?php if ($selected_style == '$style1') echo 'selected'; ?>>1976</option>
            <option value="style2"<?php if ($selected_style == '$style1') echo 'selected'; ?>>1977-1998</option>
            <option value="style3"<?php if ($selected_style == '$style1') echo 'selected'; ?>>1998-present</option>
        </select>
        <input type="submit" value="apply">
    </form>
</body>
</html>