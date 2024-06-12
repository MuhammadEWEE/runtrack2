<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $firstName = $_POST["firstName"];

    setcookie("firstName", $firstName, time() + (86400 * 30), "/"); // Expires in 30 days
}


$isLoggedIn = isset($_COOKIE["firstName"]);

if ($isLoggedIn) {
    $firstName = $_COOKIE["firstName"];
    echo "Hello $firstName!";
    echo "<form method='post' action=''>";
    echo "<input type='submit' name='deco' value='Disconnect'>";
    echo "</form>";

    if (isset($_POST["deco"])) {
        setcookie("firstName", "", time() - 3600, "/");
        header("Refresh:0"); 
    }
} else {
    
    echo "<form method='post' action=''>";
    echo "First Name: <input type='text' name='firstName'><br>";
    echo "<input type='submit' name='connection' value='Connection'>";
    echo "</form>";
}
?>

</body>
</html>