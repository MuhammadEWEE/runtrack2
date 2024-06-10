<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];

    if (!isset($_SESSION["firstnames"])) {
        $_SESSION["firstnames"] = array();
    }
    array_push($_SESSION["firstnames"], $firstname);
}

if (isset($_POST["reset"])) {
    unset($_SESSION["firstnames"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add firstname</title>
</head>
<body>
    <h1>Add Firstnames</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        Firstname: <input type="text" name="firstname" required>
        <input type="submit" name="submit" value="Send">
    </form>
    <h2>Lists of names</h2>
    <?php
    if (isset($_SESSION["firstnames"])) {
        echo "<ul>";
        foreach ($_SESSION["firstnames"] as $firstname) {
            echo "<li>" . $firstname . "</li>";
        }
            echo "</ul>";
    }else{
            echo "No names add.";
    }
    ?>
    <form method="post">
        <input type="submit" name="reset" value="Reset all names.">
    </form>
    
</body>
</html>