<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Password</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="post" action="index.php">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"><br></br>
        <label for="password" >Password</label>
        <input type="text" id="password" name="password"><br></br>
        <input type="submit" Value="submit">
    </form>  
    
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == 'john' || $username == 'John' && $password == 'Rambo'){
            echo"<p> You're right.But this not my war</p>";
        }else{
            echo"<p>Sorry man. You've got your wrost nightmare</p>";
        }
    }
    ?>
</body>
</html>